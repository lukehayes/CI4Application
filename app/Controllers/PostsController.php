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

        $postModel = new Post();
        $rules = $postModel->validationRules;

        if($this->request->getMethod() == 'post' && $this->validate($rules)) {
            $postModel->save([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);
        } else {
            echo view('templates/header', ['title' => 'Create a new post']);
            echo view('posts/create-form');
            echo view('templates/footer');
        }

    }

    public function edit($id) 
    {
        $post = new Post();
        $result = $post->find($id);

        if( is_null($result) ) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

		echo view('templates/header');
		echo view('posts/edit-form', ['post' => $result ]);
		echo view('templates/footer');
    }

    public function store()
    {
        $postModel = new Post();
        $rules = $postModel->validationRules;

        if($this->request->getMethod() == 'post' && $this->validate($rules)) {
            $postModel->save([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);
        } else {
            echo view('templates/header');
            echo view('posts/edit-form', ['validator' => $this->validator ]);
            echo view('templates/footer');
        }

        //return redirect('create-post');
    }

    public function update($id)
    {
        $postModel = new Post();
        $rules = $postModel->validationRules;
        $model = new Post();
        $post = $postModel->find($id);


        if( is_null($post) ) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if($this->request->getMethod() == 'post' && $this->validate($rules)) {
            $postModel->update($id, [
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);

            return redirect('home');

        } else {

            $this->edit($id);
        }

    }
}
