<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 13/01/20
 * Time: 23:14
 */

namespace App\Models;


use CodeIgniter\Model;

class AbsenceModel extends Model
{
    public function getAbsences()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('absence a');

        return $builder->select('co.nom as nomConsultant, co.prenom as prenomConsultant, a.id_absence as idAbsence,
            a.date_debut as dateDebutAbsence, a.date_fin as dateFinAbsence, a.id_motif_absence as motifAbsence')
            ->join('consultant co', 'co.codeConsultant = a.codeConsultant')
            ->where('isActive', 1)
            ->get()->getResultObject();
    }

    public function getAbsence($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('absence a');

        return $builder->select('a.id_absence as idAbsence,
            a.date_debut as dateDebutAbsence, a.date_fin as dateFinAbsence, a.id_motif_absence as motifAbsence')
            ->where('a.id_absence', $id)
            ->where('isActive', 1)
            ->get()->getResultObject()[0];
    }

    public function editAbsence($id, $absence)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('absence a');

        return $builder->set('a.date_debut', $absence['dateDebutAbsence'])
            ->set('a.date_fin', $absence['dateFinAbsence'])
            ->set('a.id_motif_absence', $absence['motifAbsence'])
            ->where('id_absence', $id)
            ->update();
    }

    public function getMotifsAbsences()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('motif_absence');

        return $builder->select('id_motif_absence as motifAbsence')
            ->get()->getResultObject();
    }
}