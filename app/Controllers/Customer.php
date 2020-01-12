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

/**
 * Description of CustomerController
 *
 * @author laitmeddour
 */
class Customer extends BaseController
{
	public function list()
	{
		$data['title'] = 'Clients';

		echo view('user/header', $data);
		echo view('customer/list');
		echo view('user/footer');
	}
}
