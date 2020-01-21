<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 13/01/20
 * Time: 00:58
 */

namespace App\Models;


use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = 'client';
    protected $primaryKey = 'idClient';
    protected $returnType = 'array';
    protected $allowedFields = [
        'nom', 'adresse'
    ];
  
    public function getClients()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('client c');

        return $builder->select('*')
            ->where('c.isActive', 1)
            ->get()->getResultObject();
    }

    public function getClient($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('client c');

        return $builder->select('*')
            ->where('idClient', $id)
            ->get()->getResultObject()[0];
    }

    public function add($client)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('client');

        return $builder->insert($client);

    }

    /*
     * Edition dun Client
     */
    public function edit($id, $client)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('client');

        return $builder->set('nom', $client['nom'])
            ->set('telephone' , $client ['telephone'])
            ->set('ville' , $client ['ville'])
            ->where('idClient', $id)
            ->update();
    }

    public function disable($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('client');

        return $builder->set('isActive', 0)
            ->where('idClient', $id)
            ->update();
    }

}