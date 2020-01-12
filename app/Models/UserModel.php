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
    protected function hashPassword(string $password)
    {
        if (! isset($password))
        {
            return $password;
        }

        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function addUser($data)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('utilisateur');
        $data['motPasse']    = $this->hashPassword($data['motPasse']);

        return $builder->insert($data);
    }
    
    //verify password
    public function verifyHash($password, $vpassword)
    {
        if(password_verify($password,$vpassword))
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    public function login($mail, $password)
    {
        $db      = \Config\Database::connect();
        
        // initialise la session
        $session = \Config\Services::session();
        
        $result = $db->table('utilisateur')
            ->select()
            ->where('mail', $mail)
            ->get()->getResultObject()[0];
        
        if($this->verifyHash($password, $result->motPasse) == true)
        {
          $session->set('user', $result);
          return true;
        }
        else{
            return false;
        }
    }
}
