<?php


namespace App\Repositories;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class EloquentLessonRepository
{

    protected $model;
    protected $eloquentCourseMLRepository;
    public function __construct(Lesson $lesson, EloquentCourseMLRepository $eloquentCourseMLRepository)
    {
        $this->model =  $lesson;
        $this->eloquentCourseMLRepository = $eloquentCourseMLRepository;
    }

    public function create($request)
    {
        // dd($request->all());
        $lesson_path = '';
        $duration = 0;
        if ($request->hasfile('lesson')) {
            $course = $this->eloquentCourseMLRepository->findById($request->course_ml_id);
            $path = $course->getPath();
            $lesson_path = saveFile($request->file('lesson'), $path);
            $duration = duration($request->file('lesson'));
        }
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'course_ml_id' => $request->course_ml_id,
            'path' => $lesson_path,
            'duration' => $duration
        ];
        return $this->model->create($data);
    }

    public function update(int $id, Request $request)
    {
        // dd($request->all());
        $lesson = $this->model->findOrFail($id);
        // dd($lesson->course_ml_id);
        if ($request->hasfile('lesson')) {
            $course = $this->eloquentCourseMLRepository->findById($lesson->course_ml_id);
            $path = $course->getPath();
            // dd($path);
            deleteFile($path . $lesson->path);
            $lesson_path = saveFile($request->file('lesson'), $path);
            $duration = duration($request->file('lesson'));
            $data = [
                'path' => $lesson_path,
                'duration' => $duration
            ];
        }
        $data += [
            'title' => ($request->title) ? $request->title : '',
            'content' => ($request->content) ? $request->content : ''
        ];
        return $lesson->update($data);
        // return $model;
    }

    public function findById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function delete(int $id)
    {
        return $this->model->findOrFail($id)->update(['status' => 'disabled']);
    }

    public function destroy(int $id)
    {
        return $this->model->findOrFail($id)->delete();
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function allAvailable($course_ml_id): Collection
    {
        return $this->model->where('course_ml_id', '=', $course_ml_id)->where('status', 'enabled')->get();
    }
}
