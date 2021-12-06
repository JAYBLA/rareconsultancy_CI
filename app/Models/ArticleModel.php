<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    var $table = 'articles';
    
    public function __construct() {
        parent::__construct();
        //$this->load->database();
        $db = \Config\Database::connect();
        $builder = $db->table('articles');
    }
    public function get_all_articles() {
        //       $query = $this->db->table('articles');
       $query = $this->db->query('select * from articles');
        //      print_r($query->getResult());
       // $query = $this->db->get();
        return $query->getResult();
    }

    public function get_by_id($id) {
      $sql = 'select * from articles where id ='.$id ;
      $query =  $this->db->query($sql);
      
      return $query->getRow();
    }

    public function article_add($data) {
        
        $query = $this->db->table($this->table)->insert($data);
       
        return $this->db->insertID();
    }

    public function article_update($where,$data) {
        $this->db->table($this->table)->update($data, $where);
    //        print_r($this->db->getLastQuery());
        return $this->db->affectedRows();
    }
    public function delete_by_id($id) {
        $this->db->table($this->table)->delete(array('article_id' => $id)); 
    }

}