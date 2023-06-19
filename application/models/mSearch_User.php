<?php 
class mSearch_User extends CI_Model
{
    public function searchData($keyword, $KodeUser)
    {
        // Query untuk mencari data berdasarkan mood
        $this->db->select("DATE(tbmood.Waktu) AS Waktu, tbmood.Mood, tbgejala.Gejala, tbmakan.NamaMakan, tbbab.Skala AS SkalaBAB, TIMEDIFF(tbtidur.WaktuSelesai, tbtidur.WaktuMulai) AS LamaTidur, tbtidur.KualitasTidur, tbcatatan.Catatan");
        $this->db->from("tbmood");
        $this->db->join("tbgejala", "tbmood.KodeUser = tbgejala.KodeUser", "left");
        $this->db->join("tbmakan", "tbmood.KodeUser = tbmakan.KodeUser", "left");
        $this->db->join("tbbab", "tbmood.KodeUser = tbbab.KodeUser", "left");
        $this->db->join("tbtidur", "tbmood.KodeUser = tbtidur.KodeUser", "left");
        $this->db->join("tbcatatan", "tbmood.KodeUser = tbcatatan.KodeUser", "left");
        $this->db->where("tbmood.KodeUser", $KodeUser);
        $this->db->where("tbmood.Mood", $keyword);
        $this->db->or_where("tbgejala.Gejala", $keyword);
        $this->db->like("tbmakan.BahanMakanan", $keyword, "both");

        // Query untuk mencari data berdasarkan waktu
        $this->db->or_where("DATE(tbmood.Waktu)", $keyword);
        $this->db->or_where("DATE(tbgejala.Waktu)", $keyword);
        $this->db->or_where("DATE(tbmakan.Waktu)", $keyword);
        $this->db->or_where("DATE(tbbab.Waktu)", $keyword);
        $this->db->or_where("DATE(tbtidur.WaktuMulai)", $keyword);
        $this->db->or_where("DATE(tbcatatan.Waktu)", $keyword);
        $this->db->group_by("DATE(tbmood.Waktu)");

        // Lakukan query dan kembalikan hasilnya
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>
