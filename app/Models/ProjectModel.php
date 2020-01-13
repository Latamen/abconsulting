<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 13/01/20
 * Time: 00:58
 */

namespace App\Models;


use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projet';
    protected $primaryKey = 'idProjet';
    protected $returnType = 'array';
    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';

    public function getProjects()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('projet p');

        return $builder->select('co.nom as nomChefProjet, co.prenom as prenomChefProjet, p.nom as nomProjet, 
        p.idProjet as idProjet,
        p.Datedebut as dateDebutProjet, p.Datefin as dateFinProjet')
            ->join('consultant co', 'co.codeConsultant = p.codeConsultant')
            ->get()->getResultObject();
    }

    public function getProject($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('projet p');

        return $builder->select('co.nom as nomChefProjet, co.prenom as prenomChefProjet, p.nom as nomProjet, 
        p.idProjet as idProjet, p.description as description,
        p.Datedebut as dateDebutProjet, p.Datefin as dateFinProjet')
            ->join('consultant co', 'co.codeConsultant = p.codeConsultant')
            ->where('p.idProjet', $id)
            ->get()->getResultObject()[0];
    }
}