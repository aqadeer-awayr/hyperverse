<?php


namespace App\Repositories;


use App\Models\CoursesMultiLanguage;
use Illuminate\Http\Request;

class EloquentCourseMLRepository
{
    private $model;

    public function __construct(CoursesMultiLanguage $model)
    {
        $this->model =  $model;
    }

    public function all()
    {
        // if (!is_null($language_id))
        //     return $this->model->where('language_id', $language_id)->get();
        return $this->model->all();
    }

    public function findById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(int $id, Request $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];
        $course = $this->findById($id);
        if ($request->hasfile('image')) {
            deleteFile($course->getPath() . $course->image);
            $image = saveFile($request->file('image'),  $course->getPath());
            $data['image'] = $image;
        }
        if ($request->hasfile('logo')) {
            deleteFile($course->getPath() . $course->logo);
            $logo = saveFile($request->file('logo'), $course->getPath());
            $data['logo'] = $logo;
        }
        return $course->update($data);
    }
}
