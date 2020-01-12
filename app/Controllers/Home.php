<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        $session = session();
        var_dump($session->get('user'));

		if($session->get('user')) {
		    return redirect('home');
        }

		return redirect('login');
	}

	//--------------------------------------------------------------------

}
