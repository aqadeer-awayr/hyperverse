<?php


namespace App\Repositories;

use App\Models\Language;
use Illuminate\Support\Collection;

class EloquentLanguageRepository
{
    protected $model;
    public function __construct(Language $language)
    {
        $this->model =  $language->withOutGlobalScope('status');
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
        return $this->model->orderByRaw("FIELD(status, \"enabled\", \"disabled\")")->get();
    }
    public function status(int $id)
    {
        $update_model = $this->model->findOrFail($id);
        $status = $update_model->status == 'enabled' ? ['status' => 'disabled'] : ['status' => 'enabled'];
        return $update_model->update($status);
    }
}
