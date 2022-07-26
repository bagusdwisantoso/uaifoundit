<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('views_user/home.php');
    }

    public function form_claim()
    {
        echo view('templates_user/header');
        echo view('templates_user/topbar');
        echo view('views_user/form_claim');
        echo view('templates_user/footer2');
    }


    public function save_barang()
    {
        //dd($this->request->getVar()); //untuk cek masuk db apa engga
        //$this->nama model->save(apa yang mau disave pake array)
        //ambil foto
        $fileFoto = $this->request->getFile('foto');
        //generate nama file foto random
        $namaFoto = $fileFoto->getRandomName();
        //pindahkan ke folder img
        $fileFoto->move('img', $namaFoto);

        $kode_barang = $this->modelBarang->kodeBarang();

        $this->modelBarang->save([
            'kode_barang'       => $kode_barang,
            'nama_barang'       => $this->request->getVar('nama_barang'),
            'kategori_barang'   => $this->request->getVar('kategori_barang'),
            'deskripsi_barang'  => $this->request->getVar('deskripsi'),
            'lokasi_barang'     => $this->request->getVar('lokasi'),
            'tanggal_ditemukan' => $this->request->getVar('tanggal'),
            'foto_barang'       => $namaFoto,
            'nama_pelapor'      => $this->request->getVar('nama_pelapor'),
            'email'             => $this->request->getVar('email'),
            'no_hp'             => $this->request->getVar('no_hp')
        ]);
        //memunculkan alert data masuk db
        // session()->setFlashdata('pesan', 'Terima kasih, laporan barang hilang telah kami terima');
        return redirect()->to('home/success');
    }

    public function success()
    {
        echo view('views_user/success_input.php');
    }
}
