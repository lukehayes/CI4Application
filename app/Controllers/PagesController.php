<?php namespace App\Controllers;

class PagesController extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('index');
		echo view('templates/footer');
	}
    
    public function view($page = "home") 
    {

        if ( ! is_file(APPPATH.'/Views/partials/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('templates/header', $data);
        echo view('partials/'.$page);
        echo view('templates/footer', $data);

    }
}
