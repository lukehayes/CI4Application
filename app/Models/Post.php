<?php namespace App\Models;

use CodeIgniter\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $returnType = 'object';

    protected $allowedFields = ['title', 'content'];

    protected $validationRules    = [
        'title'     => 'required|alpha_numeric_space|min_length[3]',
        'content'        => 'required',
    ];

    protected $validationMessages = [
        'title'        => [
            'required' => 'Sorry, this field must not be empty.'
        ]
    ];
}
