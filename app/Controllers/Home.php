<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        $session = session();

		if($session->get('user')) {
		    return redirect('home');
        }

		return redirect('login');
	}

	//--------------------------------------------------------------------

}
