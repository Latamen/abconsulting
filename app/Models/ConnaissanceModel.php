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

    public function edit($connaissance) {
        $db      = \Config\Database::connect();
        $builder = $db->table('connaissance c');

        return $builder->set('prenom', $connaissance['libelle'])
            ->set('nom', $connaissance['contenu'])
            ->set('document', $connaissance['document'])
            ->where('c.idConnaissance', $connaissance['id'])
            ->update();
    }

    public function getConnaissance($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('connaissance c');

        return $builder->select('*')
            ->join('type_connaissance tc', 'c.idTypeConnaissance = tc.idTypeConnaissance')
            ->join('projet p', 'c.idProjet = p.idProjet')
            ->where('c.idConnaissance', $id)
            ->get()->getResultObject()[0];
    }
}