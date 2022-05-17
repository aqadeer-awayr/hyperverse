<?php

namespace App\Repositories;

use App\Models\Course;
use App\Models\CoursesMultiLanguage;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class EloquentCourseRepository
{
    protected $model;
    public function __construct(Course $model)
    {
        return $this->model = $model;
    }

    /**
     * @return Course
     */
    public function getModel()
    {
        return new Course();
    }

    public function  create($request)
    {
        DB::beginTransaction();
        try {
            $course_path = '';
            $path = removeSpecialCharacters($request->title);
            $course_path = 'courses-data/' . $path;
            createDirectory($course_path);
            $data_input = [
                // 'started_at' => $request->started_at,
                // 'finished_at' => $request->finished_at,
                'title' => $request->title,
                'course_path' => $path
            ];
            $course = $this->model->create($data_input);

            $this->saveMLCourseData($course, $request);
            DB::commit();
            return ['Course Created Successfully'];
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return [$e->getMessage()];
            // something went wrong
        }
    }

    public function update(int $id, Request $request)
    {
        $course = $this->findById($id);
        $course->title = $request->title;
        if ($course->isDirty('title')) {
            $path = removeSpecialCharacters($request->title);
            $course_path = 'courses-data/' . $path;
            createDirectory($course_path);
            (new DirectoryRepository())->rename('courses-data/' . $course->course_path, $course_path);
            $course->course_path = $path;
        }
        $course->save();
        // dd('dddd');
        $this->saveMLCourseData($course, $request);
    }

    protected function saveMLCourseData($course, $request)
    {
        if ($course && !empty($request->language_id)) {
            foreach ($request->language_id as $language_id) {
                if ($request->hasfile('image')) {
                    // createDirectory($path . '/image');
                    $image = saveFile($request->file('image')[$language_id], 'courses-data/' . $course->course_path);
                }
                if ($request->hasfile('logo')) {
                    // createDirectory($path . '/logo');
                    $logo = saveFile($request->file('logo')[$language_id], 'courses-data/' . $course->course_path);
                }
                $data = [
                    'course_id' => $course->id,
                    'language_id' => $language_id,
                    'name' => $request->name[$language_id],
                    'description' => $request->description[$language_id],
                    'image' => $image,
                    'logo' => $logo,
                    'created_at' => now(),
                    'updated_at' => now()
                ];

                CoursesMultiLanguage::create($data);
            }
            DB::commit();
            return ['Course Created Successfully'];
        }
    }

    public function delete(int $id)
    {
        return $this->model->findOrFail($id)->update(['status' => 'disabled']);
    }

    public function destroy(int $id)
    {
        return $this->model->findOrFail($id)->delete();
    }

    public function findById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function all(): Collection
    {
        return $this->model->get();
    }

    public function allAvailable(): Collection
    {
        return $this->model->all()->where('status', 'enabled');
    }

    public function subscribe(int $course_id, int $user_id)
    {
        $course = $this->model->findOrFail($course_id);
        return $course->students()->attach($user_id);
    }


    public function checkSubscribed(int $course_id, int $user_id)
    {
        $course = $this->model->findOrFail($course_id);

        return $course->students()->find($user_id);
    }

    public function pluckChooseCourseLanguageId($id)
    {
        $language_ids = $this->findById($id)->multiLanguages->pluck('language_id');
        return Language::whereNotIn('id', $language_ids)->get();
    }
}
