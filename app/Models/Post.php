<?php namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function all() 
    {
        return $this->findAll();
    }
}
