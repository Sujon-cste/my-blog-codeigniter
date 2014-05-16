<?php


class Blogger_Model extends CI_Model{
    //put your code here
    
       public function add_post($data){
        $this->db->insert('blog',$data);
        
    }
         public function show_blog()
             {
                 $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('status',1);
        
        $query=$this->db->get();
        $result=$query->result();
        return $result;
             }
                public function show_my_blog($user_id)
             {
                 $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('user_id',$user_id);
        
        $query=$this->db->get();
        $result=$query->result();
        return $result;
             }
       
}

?>
