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

    public function detail($id_barang)
    {
        $data['data_katalog'] = $this->modelBarang->detail_ktlg($id_barang);
        return view('views_user/detail', $data);
    }
}
