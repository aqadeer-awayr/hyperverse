<?php

namespace App\Http\Controllers\CMS\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomText;
use App\Models\Language;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_page = CustomText::where('for_page', 'home')->get();
        return view('lms.cms.pages.home.index', compact('home_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lms.cms.pages.home.create');
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
        $model = CustomText::where('language_id', $request->language_id)
            ->where('for_page', $request->for_page)->where('slug', $request->slug)->first();
        if ($model) {
            alert()->error('This Section Already Exists');
            return redirect()->back();
        }
        $request['data'] = json_encode($request->data);
        CustomText::create($request->all());
        return redirect()->back()->withSuccess('Home Page Text Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sectionResponse($id)
    {
        return trans('translation.home.' . $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home = CustomText::find($id);
        return view('lms.cms.pages.home.edit', compact('home'));
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
        // dd($request->all());
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
