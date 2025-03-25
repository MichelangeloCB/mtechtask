<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\TaskModel;

class TaskApiController extends ResourceController
 {
    protected $modelName = TaskModel::class;
    protected $format = 'json';

    public function index()
    {
        $tasks = $this->model->findAll();
        return $this->respond($tasks);
    }

    public function show ($id = null)
    {
        $task = $this->model->find($id);

        if (!$task){
            return $this->failNotFound('Tarefa não encontrada');
        }

        return $this->respond($task);
    }

    public function create()
    {
        $data = $this->request->getJSON(true);

        if (!$this->model->insert($data)) {
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respondCreated(['message' => 'Tarefa criada com sucesso!']);
    }

    public function update($id = null)
    {
        $data = $this->reuest->getJSON(true);

        if (!$this->model->update($id, $data)){
            return $this->failValidationErrors($this->model->errors());
        }

        return $this->respond(['message' => 'Tarefa atualizada com sucesso!']);
    }

    public function delete ($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->failNotFound('Tarefa não encontrada ou já excluída.');
        }

        return $this->respondDeleted(['message' => 'Tarefa excluída com sucesso!']);
    }

}
