<?php namespace App\Models;

use CodeIgniter\Model;

class Posts extends Model
{
    protected $table = 'posts';

    public function all() 
    {
        return $this->findAll();
    }
}
