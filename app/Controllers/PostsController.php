<?php namespace App\Controllers;

use App\Models\Post;

class PostsController extends BaseController
{
	public function index()
	{
        $post = new Post();

		echo view('templates/header');
		echo view('posts/index', ['posts' => $post->findAll()]);
		echo view('templates/footer');
	}

    public function show($id)
    {
        $post = new Post();
        $result = $post->find($id);

        if( is_null($result) ) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }



		echo view('templates/header');
		echo view('posts/show', ['post' => $post->find($id)]);
		echo view('templates/footer');

    }

    public function view($id) {
        var_dump($id);
    }
}
