<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 04/01/20
 * Time: 05:35
 */

namespace App\Controllers;


class Consultant extends BaseController
{
    public function list()
    {
        $data['title'] = "Consultants";

        echo view('user/header', $data);
        echo view('consultant/list');
        echo view('user/footer');
    }
}