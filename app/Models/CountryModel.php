<?php

namespace App\Models;

use CodeIgniter\Model;

class CountryModel extends Model
{
    protected $table = 'paises';

    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    public function getCountries()
    {
        $db = db_connect();
        $builder = $db->table('paises');

        return $builder->get()->getResult();
    }
}
