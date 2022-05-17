<?php

namespace App\Http\Controllers\LMS\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\EloquentCourseRepository;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $eloquentCourseRepository;
    public function __construct(EloquentCourseRepository $eloquentCourseRepository)
    {

        // $this->middleware('auth:admin')->except('logout'); //Notice this middleware
        $this->eloquentCourseRepository = $eloquentCourseRepository;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {

        return view('lms.dashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->eloquentCourseRepository->all();
        return view('lms.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lms.courses.create');
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
        $res = $this->eloquentCourseRepository->create($request);
        return redirect()->route('courses.index')->withSuccess($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = $this->eloquentCourseRepository->findById($id);
        return view('lms.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = $this->eloquentCourseRepository->findById($id);
        $languages = $this->eloquentCourseRepository->pluckChooseCourseLanguageId($id);
        return view('lms.courses.edit', compact('course', 'languages'));
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
        $this->eloquentCourseRepository->update($id, $request);
        return redirect()->back()->withSuccess('Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = $this->eloquentCourseRepository->findById($id);
        $this->eloquentCourseRepository->delete($id);
        $course->destroy($id);
        $courses = $this->eloquentCourseRepository->all();
        return view('lms.courses.table-data', compact('courses'));
    }
}
