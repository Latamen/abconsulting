<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 04/01/20
 * Time: 05:35
 */

namespace App\Controllers;

use App\Models\ConsultantModel;

class Consultant extends BaseController
{
    public function __construct()
    {
        $session = session();

        if(!$session->get('user')) {
            redirect('login');
        }
    }

    /**
     * Liste l'ensemble des existant existants
     */
    public function list()
    {
		$data['title'] = 'Consultants';
		
		// récupération du modèle Consultant
		$consultantModel = new ConsultantModel();
		$data['consultants'] = $consultantModel->getConsultants();

		echo view('user/header', $data);
		echo view('consultant/list', $data);
		echo view('user/footer');
	}


    /**
     * ajouter un consultant
     */
    public function add()
    {
        $data['title'] = 'Consultants';

        // récupération du modèle Consultant
        $consultantModel = new ConsultantModel();

        // si on a validé le formulaire d'édition d'un Consultant
        if ($this->request->getPost()) {
            // récupération du modèle Consultant
            $consultantModel = new ConsultantModel();

            // récupération des infos du formulaire
            $consultant['nom'] = $this->request->getPost('nom');
			$consultant['prenom'] = $this->request->getPost('prenom');
			$consultant['telephone'] = $this->request->getPost('telephone');
            $consultant['anneeEmbauche'] = $this->request->getPost('anneeEmbauche');
            $consultant['codeEquipe'] = $this->request->getPost('codeEquipe');


			// méthode create du modele consultant
			$consultantModel->add($consultant);
			
            // redirection vers la liste des consultant
            return redirect('consultant/list');
        }

        echo view('user/header', $data);
		echo view('consultant/add', $data);
        echo view('user/footer');
    }
    /**
     * Modifie les informations d'un consultant
     */
    public function edit($codeConsultant)
    {
        $data['title'] = 'Consultants';

        // récupération du modèle Consultant
        $consultantModel = new ConsultantModel();
        $data['consultant'] = $consultantModel->getConsultant($codeConsultant);

        // si on a validé le formulaire d'édition d'un Consultant
        if ($this->request->getPost()) {
            // récupération du modèle Consultant
            $consultantModel = new ConsultantModel();

            // récupération des infos du formulaire
            $consultant['codeConsultant'] = $codeConsultant;
            $consultant['nom'] = $this->request->getPost('nom');
			$consultant['prenom'] = $this->request->getPost('prenom');
			$consultant['telephone'] = $this->request->getPost('telephone');
			$consultant['anneeEmbauche'] = $this->request->getPost('anneeEmbauche');
			/*print_r ($consultant);die;*/

            // méthode update du modele consultant
			$consultantModel->edit($codeConsultant, $consultant);
			
            // redirection vers la liste des consultant
            return redirect('consultant/list');
        }

        echo view('user/header', $data);
		echo view('consultant/edit', $data);
        echo view('user/footer');
    }

    /**
     * Supprimer un projet (le désactive en base pour ne plus l'afficher)
     */
    public function delete($id)
    {
        // récupération du modèle Project
        $consultantModel = new ConsultantModel();

        $consultantModel->disable($id);
        return redirect('consultant/list');
    }
}