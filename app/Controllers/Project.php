<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 13/01/20
 * Time: 00:07
 */

namespace App\Controllers;


use App\Models\ProjectModel;

class Project extends BaseController
{
    /**
     * Liste l'ensemble des projets existants
     */
    public function list()
    {
        $data['title'] = 'Projets';

        // récupération du modèle Projet
        $projectModel = new ProjectModel();
        $data['projects'] = $projectModel->getProjects();

        echo view('user/header', $data);
        echo view('project/list', $data);
        echo view('user/footer');
    }

    /**
     * Ajoute un projet
     */
    public function add()
    {

    }

    /**
     * Modifie les informations d'un projet
     */
    public function edit($idProjet)
    {
        $data['title'] = 'Projets';

        // récupération du modèle Projet
        $projectModel = new ProjectModel();
        $data['project'] = $projectModel->getProject($idProjet);

        // si on a validé le formulaire d'édition d'un projet
        if ($this->request->getPost()) {
            // récupération du modèle Project
            $projectModel = new ProjectModel();

            // récupération des infos du formulaire
            $project['idProjet'] = $idProjet;
            $project['nom'] = $this->request->getPost('nomProjet');
            $project['description'] = $this->request->getPost('description');

            // méthode update du modele Project
            $projectModel->edit($idProjet, $project);

            // redirection vers la liste des projets
            return redirect('project/list');
        }

        echo view('user/header', $data);
        echo view('project/edit', $data);
        echo view('user/footer');
    }

    /**
     * Supprime un projet (le désactive en base pour ne plus l'afficher)
     */
    public function delete($id)
    {
        // récupération du modèle Project
        $projectModel = new ProjectModel();

        $projectModel->disable($id);
        return redirect('project/list');
    }
}