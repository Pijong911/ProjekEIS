<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table = 'obat';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    

    protected $allowedFields = [
        'nama_obat',
        'stock',
        'Gambar',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
