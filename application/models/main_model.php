<?php

class Main_model extends CI_Model {

    public function test_main()
    {
      echo "This is model function";
    }

    function insert_data($data)
    {
      $this->db->insert("tbl_user", $data);
    }

    function fetch_data()
    {
         $this->db->select("*");
         $this->db->from("tbl_user");
         $query = $this->db->get();
         return $query;
    }


}

?>
