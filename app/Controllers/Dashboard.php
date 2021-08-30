<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        if (strlen($session->get('user_name')) > 0)
            echo "Welcome back, " . $session->get('user_name');
        else
            return redirect()->to('login');
    }
}
