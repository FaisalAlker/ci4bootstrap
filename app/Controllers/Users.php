<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        // $model = new UsersModel();
        // $data['users'] = $model->findAll();

        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM users");
        $results = $query->getResultArray(); 
        $data['users'] = $results;
        return view('user_data', $data);
    }

    public function dashboard() {
        return view('dashboard');
    }

    // function getUserById($id) {
    //     $db = \Config\Database::connect();
    //     $sql = "SELECT * FROM users WHERE id = ?";
    //     $query = $db->query($sql, [$id]);
    //     $results = $query->getResultArray(); 
    //     return $results;
    // }

    public function userData($id) {
        // $db = \Config\Database::connect();
        // $sql = "SELECT * FROM users WHERE id = ?";
        // $query = $db->query($sql, [$id]);
        // $results = $query->getResultArray(); 
        // $data['users'] = $this->getUserById($id);

        $model = new UsersModel();
        $data['users'] = $model->where('id',$id)->join(['users', 'user.id = data.id', 'inner']);

        // $model = new UsersModel();
        // $updateData = $this->update_user();
        // $data['users'] = $model->where('id', $id)->first();
        // $data['user_id'] = $id;
        return view('forms/users', $data);
    }

    public function update_user() {
        $userModel = new UsersModel();

        $data = [
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'pass_confirm' => $this->request->getPost('pass_confirm')
        ];

        // Aturan validasi
        $rules = [
            'email'        => 'required|valid_email|is_unique[users.email]',
            'password'     => 'required|min_length[6]',
            'pass_confirm' => 'required|matches[password]'
        ];

        return 2;
    }

}
