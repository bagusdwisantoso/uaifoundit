<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        echo view('views_admin/dashboard');
    }

    public function manage_admin()
    {
        $data['users'] = $this->modelAdmin->findAll();
        return view('views_admin/manage_admin', $data);
    }

    public function profile()
    {
        echo view('views_admin/profile');
    }

    public function status_nonactive($id)
    {
        $this->modelAdmin->save([
            'id' => $id,
            'active' => '0'
        ]);

        return redirect()->to('admin/manage_admin');
    }

    public function status_active($id)
    {
        $this->modelAdmin->save([
            'id' => $id,
            'active' => '1'
        ]);

        return redirect()->to('admin/manage_admin');
    }
}
