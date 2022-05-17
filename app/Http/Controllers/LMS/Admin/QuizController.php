<?php

namespace App\Http\Controllers\LMS\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quizzes\CreateRequest;
use App\Models\CoursesMultiLanguage;
use App\Repositories\EloquentQuizRepository;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    private $eloquentQuizRepository;
    public function __construct(EloquentQuizRepository $eloquentQuizRepository)
    {
        $this->eloquentQuizRepository = $eloquentQuizRepository;
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
        return view('lms.quizzes.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        // dd($request->all());
        $this->eloquentQuizRepository->create($request->all());
        $quizzes = $this->eloquentQuizRepository->getQuizzes($request->course_ml_id);
        // return view('quizzes.create', compact('course', 'quizzes'));
        return redirect()->route('quizzes.create', $request->course_ml_id)->with('success', 'Quiz created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = $this->eloquentQuizRepository->findById($id);
        return view('lms.quizzes.show', compact('quiz'));
    }

    public function status($id)
    {
        $this->eloquentQuizRepository->status($id);
        return redirect()->back()->withSuccess('Status Updated');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz = $this->eloquentQuizRepository->findById($id);
        return view('lms.quizzes.edit', compact('quiz'));
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
        $this->eloquentQuizRepository->update($id, $request->all());
        return redirect()->back()->withSuccess('Quiz Updated');
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
