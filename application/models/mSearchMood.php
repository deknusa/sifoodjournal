<?php 
class mSearchMood extends CI_Model
{
    function searchDataMood($keyword, $KodeUser){
        $hasil1['mood']=$this->db->select('*')
            ->from('tbmood')
            ->where('KodeUser', $KodeUser)
            ->where('Mood',$keyword)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();

        $hasil1['hitung'] =$this->db->select('NamaMakan, COUNT(KodeMakan) AS jumlah')
            ->from('tbmakan')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(Waktu) IN (SELECT DATE(Waktu) FROM tbmood WHERE Mood = '$keyword' AND KodeUser = $KodeUser)", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 1 DAY)) FROM tbmood WHERE Mood = '$keyword' AND KodeUser = $KodeUser)", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 2 DAY)) FROM tbmood WHERE Mood = '$keyword' AND KodeUser = $KodeUser)", NULL, FALSE)
            ->group_by('NamaMakan')
            ->order_by('jumlah', 'DESC')
            ->order_by('NamaMakan')
            ->get()
            ->result_array();

        $hasil1['makan'] =$this->db->select('*')
            ->from('tbmakan')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(Waktu) IN (SELECT DATE(Waktu) FROM tbmood WHERE Mood = '$keyword' AND KodeUser = $KodeUser )", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 1 DAY)) FROM tbmood WHERE Mood = '$keyword' AND KodeUser = $KodeUser )", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 2 DAY)) FROM tbmood WHERE Mood = '$keyword' AND KodeUser = $KodeUser )", NULL, FALSE)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();
        return $hasil1;
    }

    function lihat($KodeMood, $KodeUser){

        $hasil2['makan'] =$this->db->select('*')
            ->from('tbmakan')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(Waktu) IN (SELECT DATE(Waktu) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 1 DAY)) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 2 DAY)) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();
        $hasil2['tidur'] =$this->db->select('*')
            ->from('tbtidur')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(WaktuMulai) IN (SELECT DATE(Waktu) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->or_where("DATE(WaktuMulai) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 1 DAY)) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->or_where("DATE(WaktuMulai) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 2 DAY)) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->order_by('WaktuMulai', 'DESC')
            ->get()
            ->result_array();  
        $hasil2['gejala'] =$this->db->select('*')
            ->from('tbgejala')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(Waktu) IN (SELECT DATE(Waktu) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 1 DAY)) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 2 DAY)) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();  
        $hasil2['bab'] =$this->db->select('*')
            ->from('tbbab')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(Waktu) IN (SELECT DATE(Waktu) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 1 DAY)) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->or_where("DATE(waktu) IN (SELECT DATE(DATE_SUB(waktu, INTERVAL 2 DAY)) FROM tbmood WHERE KodeMood=$KodeMood )", NULL, FALSE)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();
       return $hasil2;
    }

    function ditail($KodeMakan, $KodeUser) {
        $hasil2['makan'] =$this->db->select('*')
            ->from('tbmakan')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(Waktu) = (SELECT DATE(Waktu) FROM tbmakan WHERE KodeMakan=$KodeMakan )", NULL, FALSE)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();
        $hasil2['tidur'] =$this->db->select('*')
            ->from('tbtidur')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(WaktuMulai) = (SELECT DATE(Waktu) FROM tbmakan WHERE KodeMakan=$KodeMakan )", NULL, FALSE) 
            ->order_by('WaktuMulai', 'DESC')
            ->get()
            ->result_array();  
        $hasil2['gejala'] =$this->db->select('*')
            ->from('tbgejala')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(Waktu) = (SELECT DATE(Waktu) FROM tbmakan WHERE KodeMakan=$KodeMakan )", NULL, FALSE)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();  
        $hasil2['bab'] =$this->db->select('*')
            ->from('tbbab')
            ->where('KodeUser', $KodeUser)
            ->where("DATE(Waktu) = (SELECT DATE(Waktu) FROM tbmakan WHERE KodeMakan=$KodeMakan )", NULL, FALSE)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();
       return $hasil2;
    }
    function lihatJum($NamaMakan,$Mood,$KodeUser){
        $hasil3 =$this->db->select('*')
            ->from('tbmakan')
            ->where('NamaMakan', $NamaMakan)
            ->where('KodeUser', $KodeUser)
            ->where("DATE(waktu) >= ALL (SELECT DATE(DATE_SUB(waktu, INTERVAL 2 DAY)) FROM tbmood WHERE Mood = '$Mood' AND KodeUser = $KodeUser)", NULL, FALSE)
            ->order_by('Waktu', 'DESC')
            ->get()
            ->result_array();
        return $hasil3;
    }
}
?>
