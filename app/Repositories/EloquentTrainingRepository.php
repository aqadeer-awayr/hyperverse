<?php


namespace App\Repositories;

use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class EloquentTrainingRepository
{
    protected $model;
    public function __construct(Training $training)
    {
        $this->model =  $training;
    }

    public function create(Request $request)
    {
        $training_path = '';
        if ($request->hasfile('training')) {
            createDirectory('videos/trainings');
            $training_path = saveFile($request->file('training'), 'videos/trainings');
        }
        $data = [
            'title' =>  $request->title,
            'for_user' => $request->for_user,
            'path' => $training_path,
            'status' => 'success'
        ];
        return $this->model->create($data);
    }

    public function update(int $id, Request $request)
    {
        // dd($data);
        $training = $this->findById($id);
        $exists = Storage::disk('s3')->exists('videos/trainings/' . $training->path);
        if ($exists) {
            Storage::disk('s3')->delete('videos/trainings/' . $training->path);
        }
        if ($request->hasfile('training')) {
            createDirectory('videos/trainings');
            $training_path = saveFile($request->file('training'), 'videos/trainings');
            $training->update([
                'path' => $training_path,
            ]);
        }
        $training->update([
            'title' => $request->title,
            'for_user' => $request->for_user
        ]);

        return $training;
    }

    public function findById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function for_user(int $id)
    {
        $update_model = $this->model->findOrFail($id);
        $for_user = $update_model->for_user == 0 ? ['for_user' => 1] : ['for_user' => 0];
        return $update_model->update($for_user);
    }

    public function destroy(int $id)
    {
        return $this->model->findOrFail($id)->delete();
    }

    public function all(): Collection
    {
        return  auth()->user()->status == 'enabled' ? $this->model->where('for_user', 'verified')->get() : $this->model->where('for_user', 'non_verified')->get();
    }
}
