<?php


namespace App\Repositories;


use App\Models\Question;
use Illuminate\Support\Collection;

class EloquentQuestionRepository
{
    protected $model;
    public function __construct(Question $question)
    {
        $this->model =  $question;
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function getQuestions($quiz_id): Collection
    {
        return $this->model->where('quiz_id', '=', $quiz_id)->where('status', 'enabled')->get();
    }

    public function findById(int $id): Question
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

    public function destroy(int $id)
    {
        return $this->model->findOrFail($id)->delete();
    }
}
