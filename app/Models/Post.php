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

    //protected $validationMessages = [
        //'email'        => [
            //'is_unique' => 'Sorry. That email has already been taken. Please choose another.'
        //]
    //];
}
