<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UsersModel();
        $data['users'] = $model->findAll();

        return view('user_data', $data);
    }

    public function dashboard() {
        return view('dashboard');
    }

}
