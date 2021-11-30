<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
     echo view('dashboard/index') ;
    }

    // BLOG MODULE
    public function create_post()
    {
        $model = model(NewsModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body'  => 'required',
        ])) {
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', true),
                'body'  => $this->request->getPost('body'),
            ]);

            echo view('news/success_message');
        } else {           
            echo view('dashboard/post-create');            
        }
    }
}