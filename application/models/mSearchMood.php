<?php 
class mSearchMood extends CI_Model
{
    
    public function searchDataMood($keyword, $KodeUser){
        $this->db->select("DATE(tbmood.Waktu) AS MoodWaktu, DATE(tbmakan.Waktu) AS MakanWaktu, tbmakan.NamaMakan, COUNT(tbmakan.NamaMakan) AS jumlah");
        $this->db->from('tbmood');
        $this->db->join('tbmakan', 'tbmood.KodeUser = tbmakan.KodeUser',"left");
        $this->db->where("tbmood.Mood LIKE '%$keyword%'");
        $this->db->where('tbmood.KodeUser',$KodeUser);
        $this->db->where('tbmakan.Waktu >= DATE_SUB(DATE(tbmood.Waktu), INTERVAL 3 DAY)');
        $this->db->group_by('tbmakan.NamaMakan');
        $this->db->order_by('tbmood.Waktu', 'desc');
        $this->db->order_by('COUNT(tbmakan.NamaMakan)', 'desc');
        $query = $this->db->get();
        $hasil = $query->result_array();
        return $hasil;
    }
}
?>
