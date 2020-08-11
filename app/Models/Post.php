<?php namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $returnType = 'object';

    protected $allowedFields = ['title', 'content'];

}
