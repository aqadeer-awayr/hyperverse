<?php

namespace App\Http\Controllers\CMS\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = CustomText::where('for_page', 'faq')->get();
        return view('lms.cms.pages.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lms.cms.pages.faq.create');
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
        return redirect()->back()->withSuccess('FAQ Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function faqResponse($id)
    {
        return trans('translation.faq_inner.' . $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = CustomText::find($id);
        return view('lms.cms.pages.faq.edit', compact('faq'));
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
