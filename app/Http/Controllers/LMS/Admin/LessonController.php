<?php

namespace App\Http\Controllers\LMS\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lessons\CreateRequest;
use App\Models\CoursesMultiLanguage;
use App\Repositories\EloquentLessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    private $eloquentLessonRepository;
    public function __construct(EloquentLessonRepository $eloquentLessonRepository)
    {
        $this->eloquentLessonRepository = $eloquentLessonRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CoursesMultiLanguage $course)
    {
        return view('lms.lessons.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $this->eloquentLessonRepository->create($request);
        return redirect()->route('lessons.create', $request->course_ml_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = $this->eloquentLessonRepository->findById($id);
        // dd($lesson->courseML->course->id);
        return view('lms.lessons.edit', compact('lesson'));
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
        $this->eloquentLessonRepository->update($id,$request);
        return redirect()->back()->withSuccess('Lesson Updated');
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
