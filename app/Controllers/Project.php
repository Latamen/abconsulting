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

        echo view('user/header', $data);
        echo view('project/edit', $data);
        echo view('user/footer');
    }

    /**
     * Supprime un projet (le désactive en base pour ne plus l'afficher)
     */
    public function disable()
    {

    }
}