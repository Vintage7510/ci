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

    public function getCategoryByID($category_id)
    {
        $this->db->where('category_id',$category_id);
        return $this->db->get('categories');
    }

    public function updateCategory($category_id)
    {
        $data = array(
            'name' => name
        );
        $this->db->where('category_id',$category_id);
    }

}