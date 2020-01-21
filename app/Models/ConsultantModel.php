<?php

namespace App\Models;


use CodeIgniter\Model;

class consultantModel extends Model
{
    protected $table = 'consultant';
    protected $primaryKey = 'codeConsultant';
    protected $returnType = 'array';
    protected $allowedFields = [
        'nom', 'prenom', 'telephone'
	];

	protected $createdField  = 'anneeEmbauche';

    public function getConsultants()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('consultant c');

		return $builder->select('*')
		->where('c.isActive', 1)
            ->get()->getResultObject();
    }

    public function getConsultant($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('consultant c');

        return $builder->select('*')
            ->join('consultant co', 'co.codeConsultant = c.codeConsultant')
            ->where('c.codeConsultant', $id)
			->get()->getResultObject()[0];
	}
	

	/**
     * Édition d'un consultant
     */

    public function edit($id, $consultant)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('consultant c');

        return $builder->set('prenom', $consultant['prenom'])
			->set('nom', $consultant['nom'])
			->set('telephone', $consultant['telephone'])
			->set('anneeEmbauche', $consultant['anneeEmbauche'])
            ->where('codeConsultant', $id)
            ->update();
	}

	/**
     * supprimer d'un consultant
     */
	public function disable($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('consultant');

        return $builder->set('isActive', 0)
            ->where('codeConsultant', $id)
            ->update();
	}


	/**
     * ajout d'un consultant
     */
	public function add($consultant)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('consultant');

		return $builder->insert($consultant);
	}
}
