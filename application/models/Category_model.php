<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 27/11/2559
 * Time: 11:07
 */
class category_model extends CI_Model
{
    public function getCategory()
    {
        return $this->db->get('categories');
    }
    public function insertCategory($name)
    {
        $data = array(
            'name' => $name
        );
        $this->db->insert('categories',$data);
    }

}