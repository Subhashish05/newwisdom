<?php 
namespace App\Models;

use CodeIgniter\Model;

class Backend extends Model{
    protected $desciption = 'description';
    public function getNews($title) {
        $db = db_connect();
        return $db->query('select * from news where title ="'.$title.'"')->getResult('array')[0];
    }
    public function getTopNews() {
        $db = db_connect();
        return $db->query('select * from news LIMIT 3')->getResult('array');
    }
}