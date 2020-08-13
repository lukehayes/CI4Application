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

        $post = new Post();

        if ($this->request->getMethod() === 'post') {

            if ($this->validate($post->getValidationRules() )) {
                $post->save([
                    'title' => $this->request->getPost('title'),
                    'content'  => $this->request->getPost('content'),
                ]);
            }else {
            }

        } else
        {
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
        $post = new Post();

        if($this->request->getMethod() == 'post' && $this->validate([])) {
            $post->save([
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);
        } else {
            $this->create();
        }

        //return redirect('create-post');
    }

    public function update($id)
    {
        dump("Updating");
        $model = new Post();
        $post = $model->find($id);

        if( is_null($post) ) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        if($this->request->getMethod() == 'post' && $this->validate([])) {
            $post->update($id, [
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content')
            ]);
        } else {
            dump("NO");
            $this->edit($id);
        }

        //return redirect('create-post');
    }
}
