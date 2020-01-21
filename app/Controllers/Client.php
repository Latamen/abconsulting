<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

namespace App\Controllers;

use App\Models\ClientModel;

class Client extends BaseController
{
    /**
     * Liste l'ensemble des projets existants
     */
    public function list()
    
    {
        $data['title'] = 'Clients';

        // récupération du modèle Projet
        $ClientModel = new ClientModel();
        $data['clients'] = $ClientModel->getClients();

        echo view('user/header', $data);
        echo view('client/list', $data);
        echo view('user/footer');
    }

    // /**
    //  * Ajoute un projet
    //  */
    public function add()
    {
        $data['title'] = 'Clients';

        // si on a validé le formulaire d'édition d'un client
        if ($this->request->getPost()) {
			
            // récupération du modèle Project
            $ClientModel = new ClientModel();

            // récupération des infos du formulaire
            
			$client['nom'] = $this->request->getPost('nom');
			$client['adresse'] = $this->request->getPost('adresse');
			$client['codePostal'] = $this->request->getPost('codePostal');
			$client['ville'] = $this->request->getPost('ville');
			$client['telephone'] = $this->request->getPost('telephone');			


            // méthode update du modele Client
            $ClientModel->add($client);

            // redirection vers la liste des clients
            return redirect('client/list');
        }

        echo view('user/header', $data);
        echo view('client/add', $data);
        echo view('user/footer');
    }

    /**
     * Modifie les informations d'un projet
     */
    public function edit($idClient)
    {
        $data['title'] = 'Clients';

        // récupération du modèle Projet
		$ClientModel = new ClientModel();
        $data['client'] = $ClientModel->getClient($idClient);

        // si on a validé le formulaire d'édition d'un client
        if ($this->request->getPost()) {
            // récupération du modèle Project
            $ClientModel = new ClientModel();

            // récupération des infos du formulaire
            $client['idClient'] = $idClient;
			$client['nom'] = $this->request->getPost('nom');
			$client['adresse'] = $this->request->getPost('adresse');
			$client['codePostal'] = $this->request->getPost('codePostal');
			$client['ville'] = $this->request->getPost('ville');
			$client['telephone'] = $this->request->getPost('telephone');			


            // méthode update du modele Client
            $ClientModel->edit($idClient, $client);

            // redirection vers la liste des clients
            return redirect('client/list');
        }

        echo view('user/header', $data);
        echo view('client/edit', $data);
        echo view('user/footer');
    }

    // /**
    //  * Supprime un projet (le désactive en base pour ne plus l'afficher)
    //  */
    public function delete($id)
    {
        // récupération du modèle Client
        $ClientModel = new ClientModel();

        $ClientModel->disable($id);
        return redirect('client/list');
    }
}

