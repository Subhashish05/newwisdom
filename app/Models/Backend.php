<?php 
namespace App\Models;

use CodeIgniter\Model;

class Backend extends Model{
    protected $desciption = 'description';
    public function getArticle($title) {
        $db = db_connect();
        return $db->query('select * from article where title ="'.$title.'"')->getResult('array')[0];
    }
    public function getTopArticle() {
        $db = db_connect();
        return $db->query('select * from article ORDER BY date ASC LIMIT 3')->getResult('array');
    }
    public function getAllArticle($offset) {
        $db = db_connect();
        return $db->query('select * from article ORDER BY date ASC LIMIT 6 OFFSET '.$offset)->getResult('array');
    }
}