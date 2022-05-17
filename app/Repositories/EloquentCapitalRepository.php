<?php


namespace App\Repositories;

use App\Models\Capital;
use Illuminate\Support\Collection;

class EloquentCapitalRepository
{
    protected $model;
    public function __construct(Capital $capital)
    {
        $this->model =  $capital;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data)
    {
        // dd($data);
        $model = $this->findById($id);
        $model->update($data);
        return $model;
    }

    public function findById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function status(int $id)
    {
        $update_model = $this->model->findOrFail($id);
        $status = $update_model->status == 0 ? ['status' => 1] : ['status' => 0];
        return $update_model->update($status);
    }

    public function destroy(int $id)
    {
        return $this->model->findOrFail($id)->delete();
    }

    public function all(): Collection
    {
        return $this->model->orderBy('name', 'asc')->get();
    }
}
