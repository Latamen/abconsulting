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
    protected $allowedFields = [
        'nom', 'description'
    ];
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
            ->where('p.isActive', 1)
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

    /**
     * Édition d'un projet
     */
    public function edit($id, $project)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('projet p');

        return $builder->set('description', $project['description'])
            ->set('nom', $project['nom'])
            ->where('idProjet', $id)
            ->update();
    }

    public function disable($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('projet p');

        return $builder->set('isActive', 0)
            ->where('idProjet', $id)
            ->update();
    }
}