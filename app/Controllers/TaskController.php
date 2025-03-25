<?php 

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $model = new TaskModel();
        $data['tasks'] = $model->findAll();

        return view('tasks/index', $data); //Busca tarefas
    }

    public function create()
    {
        return view('tasks/create'); // Criar
    }

    public function store()
    {
        $model = new TaskModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status'),
        ];

        $model->save($data);

        return redirect()->to('/tasks');

    }

    public function edit($id)
    {
        $model = new TaskModel();
        $data['task'] = $model->find($id);

        return view('tasks/edit', $data);
    }

    public function update($id)
    {
        $model = new TaskModel();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'status' => $this->request->getPost('status'),
        ];

        $model->update($id,$data);

        return redirect()->to('/tasks');
    }

    public function delete($id)
    {
        $model = new TaskModel();
        $model->delete($id);

        return redirect()->to('/tasks');
    }

}

?>