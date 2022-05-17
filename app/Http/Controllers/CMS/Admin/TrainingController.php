<?php

namespace App\Http\Controllers\CMS\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Trainings\CreateRequest;
use App\Models\Training;
use App\Repositories\EloquentTrainingRepository;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    private $eloquentTrainingRepository;
    public function __construct(EloquentTrainingRepository $eloquentTrainingRepository)
    {
        $this->eloquentTrainingRepository = $eloquentTrainingRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function training()
    {
        $trainings = $this->eloquentTrainingRepository->all();
        return view('site.training', compact('trainings'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();
        return view('lms.cms.trainings.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lms.cms.trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $this->eloquentTrainingRepository->create($request);
        return redirect()->route('trainings.create')->withSuccess('Training Video Uploaded Successfully');
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
        $training = $this->eloquentTrainingRepository->findById($id);
        return view('lms.cms.trainings.edit', compact('training'));
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
        $this->eloquentTrainingRepository->update($id, $request);
        return redirect()->back()->withSuccess('Updated Traing Successfully');
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
