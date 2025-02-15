<?php

class M_peminjaman extends CI_Model{

    public function id_peminjaman()
    {
        $this->db->select('RIGHT(peminjaman.id_peminjam,3) as kode', FALSE);
        $this->db->order_by('id_peminjam', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('peminjaman');
        if ($query->num_rows()<>0) {
            $data = $query->row();
            $kode = intval($data->kode) +1;
        }else {
            $kode = 1;
        }

        $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
        $kodejadi = "PM".$kodemax;
        return $kodejadi;
    }

    public function get_data_peminjaman()
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('anggota','peminjaman.id_anggota = anggota.id_anggota');
        $this->db->join('buku','peminjaman.id_buku = buku.id_buku');
        return $this->db->get()->result();
    }

    public function getDataById_peminjam($id)
    {
        $this->db->select('*');
        $this->db->from('peminjaman');
        $this->db->join('anggota', 'peminjaman.id_anggota = anggota.id_anggota');
        $this->db->join('buku', 'peminjaman.id_buku = buku.id_buku');
        $this->db->where('peminjaman.id_peminjam', $id);
        return $this->db->get()->row_array();
    }

    public function deletepeminjam($id)
    {
        $this->db->where('id_peminjam', $id);
        $this->db->delete('peminjaman');
    }
}