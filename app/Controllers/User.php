<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 04/01/20
 * Time: 00:55
 */

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    /**
     * Page de connexion
     */
    public function login()
    {
        $data['title'] = "Connexion";

        echo view('login/header', $data);
        echo view('login/login');
    }

    public function home()
    {
        $data['title'] = "Page d'accueil";

        echo view('user/header', $data);
        echo view('user/home');
    }

    /**
     * Déconnexion
     */
    public function logout()
    {
        echo view('login/logout');
    }

    /**
     * Page Mot de passe oublié
     */
    public function forgotPassword()
    {
        $data['title'] = "Mot de passe oublié";

        echo view('login/header', $data);
        echo view('login/forgot-password');
    }

    /**
     * Page de cration d'un utilisateur et traitement formulaire
     */
    public function createUser()
    {
        // session temporaire pour les messages d'erreur temporaire
        $session = session();

       // $errors = $session->getFlashdata('errors');

        // si on a validé le formulire d'ajout d'un utilisateur
        if($this->request->getPost()) {
            // récupération du modèle User
            $userModel = new UserModel();

            // Classe Validation instanciée (relative aux règles de validation des formulaires)
            $validation = \Config\Services::validation();

            //Récupérer les données saisies envoyées en POST
            $email = $this->request->getPost('mail');
            $password = $this->request->getPost('password1');

            // données du formulaire qui seront vérifiées par le validateur de formulaire
            $validation->check($email, 'required|valid_email|is_unique[Utilisateur.mail]');
            $validation->check($password, 'required');
            $validation->check($this->request->getPost('password2'), 'required|matches[password]');

            $data = [
                'mail' => $email,
                'motPasse' => $password
            ];

            // SI pas d'erreur de validation de formulaire
            if($validation->run() == false)
            {
                $session->setFlashdata('errors', $validation->getErrors());
                redirect('user/create');
            }

            $userModel->addUser($data);
            redirect('user/login');
        }

        $data['title'] = "Création d'un utilisateur";

        echo view('login/header', $data);
        echo view('login/create-user');
    }
}