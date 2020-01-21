<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 13/01/20
 * Time: 23:12
 */

namespace App\Controllers;


use App\Models\AbsenceModel;

class Absence extends BaseController
{
    /**
     * Liste l'ensemble des absences
     */
    public function list()
    {
        $data['title'] = 'Absences';

        // récupération du modèle Projet
        $absenceModel = new AbsenceModel();
        $data['absences'] = $absenceModel->getAbsences();

        echo view('user/header', $data);
        echo view('absence/list', $data);
        echo view('user/footer');
    }

    /**
     * Modifie une absence
     */
    public function edit($id)
    {
        $data['title'] = 'Absences';

        // récupération du modèle Projet
        $absenceModel = new AbsenceModel();
        $data['motifsAbsence'] = $absenceModel->getMotifsAbsences();
        $data['absence'] = $absenceModel->getAbsence($id);

        // si on a validé le formulaire d'édition d'un projet
        if ($this->request->getPost()) {
            // récupération du modèle Project
            $absenceModel = new AbsenceModel();

            $session = session();

            // récupération des infos du formulaire
            $absence['idAbsence'] = $id;
            $absence['dateDebutAbsence'] = $this->request->getPost('dateDebutAbsence');
            $absence['dateFinAbsence'] = $this->request->getPost('dateFinAbsence');
            $absence['motifAbsence'] =$this->request->getPost('motifAbsence');

            // méthode update du modele Absence
            $absenceModel->editAbsence($id, $absence);

            $session->setFlashdata('success', ['Absence modifiée']);

            // redirection vers la liste des absences
            return redirect('absence/list');
        }

        echo view('user/header', $data);
        echo view('absence/edit', $data);
        echo view('user/footer');
    }
}