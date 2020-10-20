<?php 

class Base_Model extends Core_Model{

    function getALL()
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->db->query($sql);
        $this->db->close();
        return $result;
    }

}

?>