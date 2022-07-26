<?php

namespace App\Controllers;

class Katalog extends BaseController
{
    public function index()
    {
        echo view('views_user/katalog_barang');
    }

    public function katalog_barang()
    {
        $data['katalog'] = $this->modelBarang->katalog();
        return view('views_user/katalog_barang', $data);
    }
}
