<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 19/01/20
 * Time: 21:47
 */

namespace App\Models;


use CodeIgniter\Model;

class ContratModel extends Model
{
    public function getContrats()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('contrat co');

        return $builder->select('co.*, m.nom as nomManager, m.prenom as prenomManager, cl.nom as nomClient, e.nom as nomEquipe')
            ->join('client cl', 'co.idClient = cl.idClient')
            ->join('equipe e', 'co.codeEquipe = e.codeEquipe')
            ->join('manager m', 'e.codeManager = m.codeManager')
            ->get()->getResultObject();
    }

    public function getContrat($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('contrat co');

        return $builder->select('co.idContrat, cl.nom as nomClient')
            ->join('client cl', 'co.idClient = cl.idClient')
            ->where('co.idContrat', $id)
            ->get()->getResultObject()[0];
    }

    public function calculTotalIng($idContrat)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('equipe e');

        return $builder->select('ct.idContrat, ti.Date, ti.nbJoursTravaillesIng, i.TJM_ing,
        (SUM(ti.nbJoursTravaillesIng) * i.TJM_ing) as totalIng')
            ->join('contrat ct', 'ct.codeEquipe = e.codeEquipe')
            ->join('ingenieur i', 'i.codeEquipe = e.codeEquipe')
            ->join('travailleringenieur ti', 'i.codeConsultant = ti.codeConsultant')
            ->where('ct.idContrat', $idContrat)
            ->groupBy('ct.idContrat, ti.Date, ti.nbJoursTravaillesIng, i.TJM_ing')
            ->get()->getResultObject();
    }

    public function calculTotalCp($idContrat)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('equipe e');

        return $builder->select('ct.idContrat, tcp.Date, tcp.nbJoursTravaillesChefProjet, cp.TJM_cp, 
        (SUM(tcp.nbJoursTravaillesChefProjet) * cp.TJM_cp) as totalCp')
            ->join('contrat ct', 'ct.codeEquipe = e.codeEquipe')
            ->join('chefprojet cp', 'e.codeEquipe = cp.codeEquipe')
            ->join('travaillerchefprojet tcp', 'cp.codeConsultant = tcp.codeConsultant')
            ->where('ct.idContrat', $idContrat)
            ->groupBy('ct.idContrat, tcp.Date, tcp.nbJoursTravaillesChefProjet, cp.TJM_cp')
            ->get()->getResultObject();
    }
}