<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categorias';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';

    public function getCategories()
    {
        $db = db_connect();
        $builder = $db->table('categorias');

        return $builder->get()->getResult();
    }
}
