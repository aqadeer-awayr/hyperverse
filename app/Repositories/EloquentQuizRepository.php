<?php


namespace App\Repositories;


use App\Models\Quiz;
use Illuminate\Support\Collection;

class EloquentQuizRepository
{
    protected $model;
    public function __construct(Quiz $quiz)
    {
        $this->model =  $quiz;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function getQuizzes($course_ml_id): Collection
    {
        return $this->model->where('course_ml_id', '=', $course_ml_id)->where('status', 'enabled')->get();
    }

    public function findById(int $id): Quiz
    {
        return $this->model->find($id);
    }

    public function update(int $id, array $data)
    {
        return $this->model->find($id)->update($data);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function status(int $id)
    {
        $update_model = $this->model->findOrFail($id);
        $status = $update_model->status == 'enabled' ? ['status' => 'disabled'] : ['status' => 'enabled'];
        return $update_model->update($status);
    }
}
