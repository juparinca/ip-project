<?php

namespace App\Models;

use CodeIgniter\Model;

class IpModel extends Model
{
    protected $table = 'ip';

    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    public function getIp()
    {
    }

    public function getAllIpWithJoin()
    {
        $db = db_connect();
        $query = $db->query('SELECT id_ip,ip, (SELECT nomb_pais FROM paises as p WHERE p.id_pais = i.id_pais ) as nomb_pais, 
        num_reporte, (SELECT nomb_categoria FROM categorias as c WHERE c.id_categoria = i.id_categoria) as nomb_categoria, fecha_reporte, fecha_bloqueo, 
        (SELECT estado FROM estados as e WHERE e.id_estado = i.id_estado) as estado, fecha_desbloqueo
        FROM ip as i ORDER BY id_ip DESC;');

        return $query->getResult();
    }

    public function insertOrUpdateIp($data, $id = false)
    {
        $db = db_connect();
        $builder = $db->table('ip');
        if ($id) {
            $builder->where('id_ip', $id);
            $builder->update($data);
        } else {
            $builder->insert($data);
        }
        
        header('Location: '.base_url('/listIp'));
        die();
    }

    public function validIfExistIp($dataIp)
    {
        $db = db_connect();
        $builder = $db->table('ip');

        return $builder->where($dataIp)->get()->getResult();
    }

    public function callProcedure($dataIp)
    {
        $db = db_connect();

        $qry_res = $this->db->query("CALL desbloquear('{$dataIp}');");

    }
}
