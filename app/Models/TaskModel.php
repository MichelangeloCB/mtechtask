<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'tasks';

    protected $primaryKey = 'id'; 

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $useSoftDeletes = false;

    protected $allowedFields = ['title','description', 'status'];

    protected $useTimestamps = true;

    protected $createdField = 'created_at'; // Campo para data de criação

    protected $updatedField = '';
    protected $deleteField = '';

    protected $validationRules = [];
    protected $validationMessage = [];
    protected $skipValidation = false;


}