<?php
 class News_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($singername=FALSE)
    {
        if($singername == FALSE)
        {
            $query=$this->db->get('sgb_Song');
            return $query->result_array();
        }
        
        $query = $this -> db -> get_where('sgb_Song',array('SingerName'=>$singername));
        return $query-> row_array();
    }
}

?>
