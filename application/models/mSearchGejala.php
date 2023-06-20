<?php 
class mSearchGejala extends CI_Model
{
    
    public function searchDataGejala($keyword, $KodeUser){
        $this->db->select("DATE(tbgejala.Waktu) AS GejalaWaktu, DATE(tbmakan.Waktu) AS MakanWaktu, tbmakan.NamaMakan, COUNT(tbmakan.NamaMakan) AS jumlah");
        $this->db->from('tbgejala');
        $this->db->join('tbmakan', 'tbgejala.KodeUser = tbmakan.KodeUser',"left");
        $this->db->where("tbgejala.Gejala LIKE '%$keyword%'");
        $this->db->where('tbgejala.KodeUser',$KodeUser);
        $this->db->where('tbmakan.Waktu >= DATE_SUB(DATE(tbgejala.Waktu), INTERVAL 3 DAY)');
        $this->db->group_by('tbmakan.NamaMakan');
        $this->db->order_by('tbgejala.Waktu', 'desc');
        $this->db->order_by('COUNT(tbmakan.NamaMakan)', 'desc');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
}
?>
