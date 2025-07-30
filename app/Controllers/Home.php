<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing');
    }

    public function sorting(): string
    {
        $userModel = new UsersModel();

        $search = $this->request->getGet('search');
        $sort   = $this->request->getGet('sort') ?? 'id';
        $order  = $this->request->getGet('order') ?? 'asc';

        // Whitelist kolom yang bisa di-sort
        $allowedSort = ['id', 'email'];
        if (!in_array($sort, $allowedSort)) {
            $sort = 'id';
        }

        // Mulai query builder
        $builder = $userModel;

        if ($search) {
            // Search by Email with Like Query
            $builder = $builder->like('email', $search);
        }

        $data['users'] = $builder->orderBy($sort, $order)->findAll();
        $data['title'] = "Sorting";
        return view('sorting', $data);
    }






    public function datatables() {
        $userModel = new UsersModel();
        $data['users'] = $userModel->findAll();
        return view('datatables', $data);
    }








    
    
   
}
