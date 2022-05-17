<?php

namespace App\Http\Controllers\LMS\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoursesMultiLanguage;
use App\Models\Quiz;
use App\Repositories\EloquentQuestionRepository;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    private $eloquentQuestionRepository;
    public function __construct(EloquentQuestionRepository $eloquentQuestionRepository)
    {
        $this->eloquentQuestionRepository = $eloquentQuestionRepository;
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
    public function create(Quiz $quiz)
    {
        return view('lms.questions.create', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['options'] = json_encode($request->options);
        $this->eloquentQuestionRepository->create($request->all());
        return redirect()->back()->withSuceess('Question Created');
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
        $question = $this->eloquentQuestionRepository->findById($id);
        return view('lms.questions.edit', compact('question'));
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
        $request['options'] = json_encode($request->options);
        $this->eloquentQuestionRepository->update($id, $request->all());
        return redirect()->back()->withSuccess('Question Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->eloquentQuestionRepository->destroy($id);
    }
}
