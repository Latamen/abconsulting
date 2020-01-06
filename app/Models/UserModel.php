<?php
/**
 * Created by PhpStorm.
 * User: lat
 * Date: 04/01/20
 * Time: 03:52
 */

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected function hashPassword(array $data)
	{
		if (! isset($data['motPasse']))
		{
			return $data;
		}

		$data['motPasse'] = password_hash($data['motPasse'], PASSWORD_DEFAULT);

		return $data;
	}

	public function addUser($data)
	{
		$db      = \Config\Database::connect();
		$builder = $db->table('Utilisateur');
		$data    = $this->hashPassword($data);

		return $builder->insert($data);
	}
}
