<?php

namespace App\Controllers;


use App\Models\ConnaissanceModel;

class Connaissance extends BaseController
{
    public function edit($idConnaissance)
    {
        $data['title'] = 'Connaissances';

        // récupération du modèle Consultant
        $connaissanceModel = new ConnaissanceModel();
        $data['connaissance'] = $connaissanceModel->getConnaissance($idConnaissance);

        // si on a validé le formulaire d'édition d'un Consultant
        if ($this->request->getPost()) {

            // récupération des infos du formulaire
            $connaissance['id'] = $idConnaissance;
            $connaissance['libelle'] = $this->request->getPost('libelle');
            $connaissance['contenu'] = $this->request->getPost('contenu');
            $connaissance['document'] = $this->request->getPost('document');
            /*print_r ($connaissance);die;*/

            // méthode update du modele connaissance
            $connaissanceModel->edit($connaissance);

            // redirection vers la liste des connaissance
            return redirect('connaissance/list');
        }

        echo view('user/header', $data);
        echo view('connaissance/edit', $data);
        echo view('user/footer');
    }

    public function add()
    {
        $data['title'] = 'Consultants';

        // récupération du modèle Consultant
        $connaissanceModel = new ConnaissanceModel();

        // si on a validé le formulaire d'édition d'un Consultant
        if ($this->request->getPost()) {

            // récupération des infos du formulaire
            $connaissance['libelle'] = $this->request->getPost('libelle');
            $connaissance['contenu'] = $this->request->getPost('contenu');
            $connaissance['document'] = $this->request->getPost('document');

            // méthode create du modele connaissance
            $connaissanceModel->add($connaissance);

            // redirection vers la liste des connaissance
            return redirect('connaissance/list');
        }

        echo view('user/header', $data);
        echo view('connaissance/add', $data);
        echo view('user/footer');
    }

    public function list()
    {
        $data['title'] = 'liste des connaissances';
        $connaissanceModel = new ConnaissanceModel();
        $data['connaissances'] = $connaissanceModel->getConnaissances();

        echo view('user/header', $data);
        echo view('connaissance/list', $data);
        echo view('user/footer');
    }

    public function delete($id)
    {
        // récupération du modèle Client
        $connaissanceModel = new ConnaissanceModel();

        $connaissanceModel->disable($id);
        return redirect('connaissance/list');
    }
}