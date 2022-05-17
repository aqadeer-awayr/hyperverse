<?php


namespace App\Repositories;

use App\Models\Announcement;
use Illuminate\Support\Collection;

class EloquentAnnouncementRepository
{
    protected $model;
    public function __construct(Announcement $model)
    {
        $this->model =  $model;
    }
    public function create($data)
    {
        return  $this->model->create($data);
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

    public function show($id){
        return $this->findById($id);
    }
}
