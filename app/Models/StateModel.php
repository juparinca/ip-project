<?php

namespace App\Models;

use CodeIgniter\Model;

class StateModel extends Model
{
    protected $table = 'estados';

    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    public function getStates()
    {
        $db = db_connect();
        $builder = $db->table('estados');

        return $builder->get()->getResult();
    }
}
