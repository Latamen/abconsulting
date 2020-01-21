<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 19/01/20
 * Time: 21:32
 */

namespace App\Controllers;


use App\Models\ContratModel;

class Contrat extends BaseController
{
    /**
     * Liste l'ensemble des contrats existants
     */
    public function list()
    {
        $data['title'] = 'Contrats';

        // récupération du modèle Contrat
        $contratModel = new ContratModel();
        $data['contrats'] = $contratModel->getContrats();

        echo view('user/header', $data);
        echo view('contrat/list', $data);
        echo view('user/footer');
    }

    /**
     * Affiche les détails d'un contrat
     */
    public function view($id)
    {
        $data['title'] = 'Contrat';

        // récupération du modèle Contrat
        $contratModel = new ContratModel();
        $data['contrat'] = $contratModel->getContrat($id);
        $montantsIngenieur = $contratModel->calculTotalIng($id);
        $montantsCp = $contratModel->calculTotalCp($id);
        $data['resultats'] = [];

        foreach($montantsIngenieur as $montantIng) {
            $dateFacture = (new \DateTimeImmutable($montantIng->Date))->format('Y-m');

            $data['resultats'][$dateFacture]['total'] = $montantIng->totalIng;
            $data['resultats'][$dateFacture]['nbJoursTravailles'] = $montantIng->nbJoursTravaillesIng;
        }

        foreach($montantsCp as $montantCp) {
            $dateFacture = (new \DateTimeImmutable($montantCp->Date))->format('Y-m');

            if(isset($data['montants'][$dateFacture])) {
                $data['resultats'][$dateFacture]['total'] = $data['montants'][$dateFacture]['total'] + $montantCp->totalCp;
            }
            else {
                $data['resultats'][$dateFacture]['total'] = $montantCp->totalCp;
            }
        }

        echo view('user/header', $data);
        echo view('contrat/view', $data);
        echo view('user/footer');
    }
}