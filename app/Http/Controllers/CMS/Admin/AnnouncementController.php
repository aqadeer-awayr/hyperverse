<?php

namespace App\Http\Controllers\CMS\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Announcement\CreateRequest;
use App\Models\Announcement;
use App\Repositories\EloquentAnnouncementRepository;

class AnnouncementController extends Controller
{
    private $eloquentAnnouncementRepository;
    public function __construct(EloquentAnnouncementRepository $eloquentAnnouncementRepository)
    {
        $this->eloquentAnnouncementRepository = $eloquentAnnouncementRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = $this->eloquentAnnouncementRepository->all();
        return view('lms.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lms.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $this->eloquentAnnouncementRepository->create($request->all());
        return redirect()->route('announcements.index')->withSuccess('Announcement Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $announcement = $this->eloquentAnnouncementRepository->show($id);
        return response()->json([
            'data' => $announcement
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $announcement = $this->eloquentAnnouncementRepository->findById($id);
        return view('lms.announcements.edit', compact('announcement'));
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
        $this->eloquentAnnouncementRepository->update($id, $request->all());
        return redirect()->back()->withSuccess('Announcement Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcement = $this->eloquentAnnouncementRepository->findById($id);
        $this->eloquentAnnouncementRepository->status($id);
        $announcement->destroy($id);
        $announcements = $this->eloquentAnnouncementRepository->all();
        return view('lms.announcements.table-data', compact('announcements'));
    }
}
