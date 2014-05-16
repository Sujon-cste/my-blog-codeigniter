<?php


class User_Profile extends CI_Model {
    public function profile_model($user_id)
    {
        $this->db->select('*');
        $this->db->from('my_cv');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
        
    }
    public function user_update($data,$user_id)
    {
        $this->db->where('user_id', $user_id);
$this->db->update('my_cv', $data); 
    }
    //put your code here
}

?>
