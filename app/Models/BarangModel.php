<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table            = 'data_barang';
    protected $primaryKey       = 'id_barang';
    protected $returnType       = 'object';
    protected $allowedFields    = ['kode_barang', 'nama_barang', 'kategori_barang', 'deskripsi_barang', 'lokasi_barang', 'tanggal_ditemukan', 'foto_barang', 'nama_pelapor', 'email', 'no_hp', 'status'];
    protected $useSoftDeletes   = false;
    protected $useTimestamps    = false;

    //function untuk relasi tabel
    function getAll()
    {
        $builder    = $this->db->table('data_barang');
        $builder->join('status', 'status.id_status = data_barang.status', false);
        $query      = $builder->get();
        return $query->getResult();
    }

    //function kode barang
    public function kodeBarang()
    {
        $kode = $this->db->table('data_barang')
            ->select('RIGHT(kode_barang,4) as kode_barang', false)
            ->orderBy('kode_barang', 'DESC')
            ->limit(1)->get()->getRowArray();

        if (empty($kode['kode_barang'])) {
            $no = 1;
        } else {
            $no = intval($kode['kode_barang']) + 1;
        }

        $teks       = "UFI";
        $tanggal    = date('ym');
        $batas      = str_pad($no, 4, "0", STR_PAD_LEFT);
        $kode_barang = $teks . $tanggal . $batas;
        return $kode_barang;
    }

    public function katalog()
    {
        $builder    = $this->db->table('data_barang');
        $builder->where("status=2");
        $query      = $builder->get();
        return $query->getResult();
    }

    public function verifikasi()
    {
        $builder = $this->db->table('data_barang');
        $builder->where("status=1");
        $query   = $builder->get();
        return $query->getResult();
    }

    public function total_ambil()
    {
        $builder  = $this->db->table('data_barang')->selectCount('id_barang')->where('status', 3);
        $query    = $builder->get();
        return $query->getResult();
    }
}
