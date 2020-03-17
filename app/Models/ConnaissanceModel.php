<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 17/03/20
 * Time: 13:35
 */

namespace App\Models;


class ConnaissanceModel
{
    public function add($connaissance) {
        $db      = \Config\Database::connect();
        $builder = $db->table('connaissance');

        return $builder->insert($connaissance);
    }

    public function getConnaissances() {
        $db      = \Config\Database::connect();
        $builder = $db->table('connaissance c');

        return $builder->select('*, p.nom as nomProjet')
            ->join('projet p', 'c.idProjet = p.idProjet')
            ->where('c.isActive', 1)
            ->get()->getResultObject();
    }

    public function edit($connaissance) {
        $db      = \Config\Database::connect();
        $builder = $db->table('connaissance c');

        return $builder->set('libelle', $connaissance['libelle'])
            ->set('contenu', $connaissance['contenu'])
            ->set('document', $connaissance['document'])
            ->where('c.idConnaissance', $connaissance['id'])
            ->update();
    }

    public function getConnaissance($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('connaissance c');

        return $builder->select('c.*, p.nom as nomProjet, tc.libelleTypeConnaissance as typeConnaissance')
            ->join('type_connaissance tc', 'c.idTypeConnaissance = tc.idTypeConnaissance')
            ->join('projet p', 'c.idProjet = p.idProjet')
            ->where('c.idConnaissance', $id)
            ->get()->getResultObject()[0];
    }

    public function disable($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('connaissance');

        return $builder->set('isActive', 0)
            ->where('idConnaissance', $id)
            ->update();
    }
}