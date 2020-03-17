<?php

namespace App\Controllers;


use App\Models\ConnaissanceModel;

class Connaissance extends BaseController
{
    public function list() {
        $data['title'] = 'liste des connaissances';
        $connaissanceModel = new ConnaissanceModel();
        $data['connaissances'] = $connaissanceModel->getConnaissances();

        echo view('user/header', $data);
        echo view('connaissance/list', $data);
        echo view('user/footer');
    }
}