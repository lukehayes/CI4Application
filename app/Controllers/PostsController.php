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
		echo view('posts/show', ['post' => $result ]);
		echo view('templates/footer');

    }

    public function create()
    {
		echo view('templates/header');
		echo view('posts/form', []);
		echo view('templates/footer');
    }

    public function store()
    {
        $post = new Post();

        if($this->request->getMethod() == 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'content'  => 'required'
        ])) {

            $post->save([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);
        }

        return redirect('home');
    }
}
