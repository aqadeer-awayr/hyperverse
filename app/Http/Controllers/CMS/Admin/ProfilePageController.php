<?php

namespace App\Http\Controllers\CMS\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomText;
use Illuminate\Http\Request;

class ProfilePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = CustomText::where('for_page', 'profiles')->get();
        return view('lms.cms.pages.profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profiles = trans('translation.profile');
        return view('lms.cms.pages.profile.create', compact('profiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $model = CustomText::where('language_id', $request->language_id)->where('for_page', $request->for_page)->first();
        if ($model) {
            alert()->error('This Section Already Exists');
            return redirect()->back();
        }
        $request['data'] = json_encode($request->data);
        CustomText::create($request->all());
        return redirect()->back()->withSuccess('Time Line Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileResponse($id)
    {
        return trans('translation.profile.' . $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = CustomText::find($id);
        return view('lms.cms.pages.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        CustomText::updateOrCreate(
            [
                'id' => $id
            ],
            ['data' => json_encode($request->data)]
        );
        return redirect()->back()->withSuccess('Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
