<?php namespace App\Controllers;

class PostsController extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('posts/index');
		echo view('templates/footer');
	}
}
