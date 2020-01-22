<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_rekap extends CI_Model
{
    public function jlhap()
    {
        $data = $this->db->query("SELECT count(a.nip) as ap, a.absen_pagi, b.nip as nip_p from absen_pagi a join pegawai b on a.nip=b.nip WHERE a.absen_pagi=1 GROUP BY b.nip");
        return $data;
    }
    public function jlhasi()
    {
        $data = $this->db->query("SELECT count(a.nip) as asi, a.absen_siang, b.nip as nip_p from absen_siang a join pegawai b on a.nip=b.nip WHERE a.absen_siang=1 GROUP BY b.nip");
        return $data;
    }
    public function jlhaso()
    {
        $data = $this->db->query("SELECT count(a.nip) as aso, a.absen_sore, b.nip as nip_p from absen_sore a join pegawai b on a.nip=b.nip WHERE a.absen_sore=1 GROUP BY b.nip");
        return $data;
    }
    public function sakit()
    {
        $data = $this->db->query("SELECT count(a.nip) as sakit, a.absen_pagi, b.nip, b.absen_siang, c.nip as nip_p, c.absen_sore, d.nip from pegawai d join absen_pagi a on d.nip=a.nip join absen_siang b on d.nip=b.nip join absen_sore c on d.nip=c.nip WHERE a.absen_pagi=2 OR b.absen_siang=2 OR c.absen_sore=2 GROUP BY d.nip");
        return $data;
    }
    public function izin()
    {
        $data = $this->db->query("SELECT count(a.nip) as izin, a.absen_pagi, b.nip, b.absen_siang, c.nip as nip_p, c.absen_sore, d.nip from pegawai d join absen_pagi a on d.nip=a.nip join absen_siang b on d.nip=b.nip join absen_sore c on d.nip=c.nip WHERE a.absen_pagi=3 OR b.absen_siang=3 OR c.absen_sore=3 GROUP BY d.nip");
        return $data;
    }
    public function alfa()
    {
        $data = $this->db->query("SELECT count(a.nip) as alfa, a.absen_pagi, b.nip, b.absen_siang, c.nip as nip_p, c.absen_sore, d.nip from pegawai d join absen_pagi a on d.nip=a.nip join absen_siang b on d.nip=b.nip join absen_sore c on d.nip=c.nip WHERE a.absen_pagi=4 OR b.absen_siang=4 OR c.absen_sore=4 GROUP BY d.nip");
        return $data;
    }
    public function dinas_luar()
    {
        $data = $this->db->query("SELECT count(a.nip) as dinas_luar, a.absen_pagi, b.nip as nip_p, b.absen_siang, c.nip, c.absen_sore, d.nip from pegawai d join absen_pagi a on d.nip=a.nip join absen_siang b on d.nip=b.nip join absen_sore c on d.nip=c.nip WHERE a.absen_pagi=5 OR b.absen_siang=5 OR c.absen_sore=5 GROUP BY d.nip");
        return $data;
    }
    public function cuti()
    {
        $data = $this->db->query("SELECT count(a.nip) as cuti, a.absen_pagi, b.nip as nip_p, b.absen_siang, c.nip, c.absen_sore, d.nip from pegawai d join absen_pagi a on d.nip=a.nip join absen_siang b on d.nip=b.nip join absen_sore c on d.nip=c.nip WHERE a.absen_pagi=6 OR b.absen_siang=6 OR c.absen_sore=6 GROUP BY d.nip");
        return $data;
    }

    public function rekap()
    {
        $date = date('Y-m-d');
        $where = "WHERE month(b.tgl_absen) = month('$date')";
        $data = $this->db->query("SELECT a.nip as nip_p, a.nama, b.nip, b.absen_pagi, b.tgl_absen as tgl, c.nip, c.absen_siang, c.tgl_absen, d.nip, d.absen_sore, d.tgl_absen from pegawai a left join absen_pagi b on a.nip=b.nip left join absen_siang c on a.nip=c.nip left join absen_sore d on a.nip=d.nip GROUP BY a.nip");
        return $data;
    }

    public function print()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $where = "WHERE month(b.tgl_absen) = '$bulan' AND year(b.tgl_absen) = '$tahun'";
        $data = $this->db->query("SELECT a.nip as nip_p, a.nama, b.nip, b.absen_pagi, b.tgl_absen as tgl, c.nip, c.absen_siang, c.tgl_absen, d.nip, d.absen_sore, d.tgl_absen from pegawai a left join absen_pagi b on a.nip=b.nip left join absen_siang c on a.nip=c.nip left join absen_sore d on a.nip=d.nip  $where GROUP BY a.nip");
        return $data;
    }
    /*
    public function rekap()
    {
        $data = $this->db->query("SELECT a.nip, a.nama, count(b.nip) as sakit, b.absen_pagi, count(c.nip) as sakit, c.absen_siang, count(d.nip) as sakit, d.absen_sore from pegawai a left join absen_pagi b on a.nip=b.nip left join absen_siang c on a.nip=c.nip left join absen_sore d on a.nip=d.nip WHERE b.absen_pagi=2 OR c.absen_siang=2 OR d.absen_sore=2 GROUP BY a.nip order by a.nama asc");
        return $data;
    }*/
}
