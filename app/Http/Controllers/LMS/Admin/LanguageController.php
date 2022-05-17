<?php

namespace App\Http\Controllers\LMS\Admin;

use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Languages\CreateRequest;
use App\Repositories\EloquentLanguageRepository;

class LanguageController extends Controller
{
    private $eloquentLanguageRepository;
    public function __construct(EloquentLanguageRepository $eloquentLanguageRepository)
    {
        // $this->middleware('auth:admin')->except('logout'); //Notice this middleware
        $this->eloquentLanguageRepository = $eloquentLanguageRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = $this->eloquentLanguageRepository->all();
        return view('lms.languages.index', compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lms.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $this->eloquentLanguageRepository->create($request->all());
        return redirect()->route('languages.index')->withSuccess('Language Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $language = $this->eloquentLanguageRepository->findById($id);
    //     return view('lms.languages.edit', compact('language'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $language = $this->eloquentLanguageRepository->findById($id);
        return view('lms.languages.edit', compact('language'));
    }
    /**
     * update status of the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->eloquentLanguageRepository->status($id);
        return redirect()->route('languages.index')->withSuccess('Status Updated');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequest $request, $id)
    {
        $this->eloquentLanguageRepository->update($id, $request->all());
        return redirect()->back()->withSuccess('Language Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language = $this->eloquentLanguageRepository->findById($id);
        $this->eloquentLanguageRepository->delete($id);
        $language->destroy($id);
        $languages = $this->eloquentLanguageRepository->all();
        return view('lms.languages.table-data', compact('languages'));
    }
}
