<?php

namespace App\Filters;

use CodeIgniter\Config\Services;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request)
    {
        $session = Services::session();
        if (!$session->has('user'))
        {
            return redirect('login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
    }
}