<?php

namespace App\Http\Controllers;

use App\Models\Capital;
use App\Models\CustomText;
use App\Models\Language;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Reader\Csv;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // dd(cache('menu'));
        $this->middleware(['auth', 'verified'])->except(['getCapitals', 'home', 'test']);
    }


    public function home()
    {
        $video_path = config('filesystems.disks.s3.s3-url') . 'videos/presentation_video_in_English.mp4';
        if (auth()->user() && isset(auth()->user()->preffered_language)) {
            $language = Language::find(auth()->user()->preffered_language);
            $video_name = 'presentation_video_in_' . $language->name . '.mp4';
            $exists = Storage::disk('s3')->exists('videos/' . $video_name);
            if ($exists) {
                $video_path = config('filesystems.disks.s3.s3-url') . 'videos/' . $video_name;
            }
            // dd($video_name);
        }
        return view('site.home', compact('video_path'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('lms.dashboard');
    }

    public function getCapitals()
    {
        // $users = User::all();
        // foreach ($users as $user) {
        //     if ($user->state) {
        //         $data[] = $user->state;
        //         $data[0]['name'] = $user->state->country->name;
        //     }
        // }
        // dd(($data));

        $data = Capital::where('status', 1)->get();
        return json_encode($data);
    }

    public function test(Request $request)
    {
        $user = auth()->user();
        $status = ['is_show_popup' => false];
        $user->update($status);
        return json_encode(['data' => true]);
        // // dd($request->file('file'));
        $abc = State::all('id', 'name', 'country_id', 'latitude', 'longitude');
        return response()->json($abc);
        $reader = new Csv();
        // dd($reader);
        $spreadsheet = $reader->load($request->file('file'));
        $countyData = $spreadsheet->getActiveSheet()->toArray();
        // dd($countyData);
        if (!empty($countyData)) {
            foreach ($countyData as $key => $countyData) { //skipping first row
                // dd($countyData[1]);
                if ($key == 0)
                    continue;
                if (!is_null($countyData[1])) {
                    $state = State::whereName($countyData[1])->first();
                    // dd($state);
                    if ($state) {
                        $state->update([
                            "latitude" => $countyData[7],
                            "longitude" => $countyData[8],
                        ]);
                        $data[] = [
                            "id" => $state->id,
                            "country_id" => $state->country_id,
                            "name" => "Badakhshan",
                            "status" => 1,
                            "latitude" => $countyData[7],
                            "longitude" => $countyData[8],

                        ];
                    }
                }
            }
        }
        return response()->json(['count' => count($data), 'languages' => $data]);
    }
}
