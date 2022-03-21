<?php

namespace App\Controllers;
use App\Models\PostsModel;

class Pages extends BaseController
{
    public function index()
    {    
        helper('text');
        
        $model = model(PostsModel::class);

        $data = [
            'posts'  => $model->orderBy('id', 'DESC')->paginate(6),
            'pager' => $model->pager,
            'title' => 'Home',
        ];
        return view('pages/home', $data);
    }

    public function articles()
    {  

        helper('text');
        
        $model = model(PostsModel::class);

        $data = [
            'posts'  => $model->orderBy('id', 'DESC')->paginate(6),
            'pager' => $model->pager,
            'title' => 'Articles',
        ];
        echo view('pages/articles', $data);       
    }

        
    public function article_detail($slug = null)
    {  
        $model = model(PostsModel::class);

        $data['posts'] = $model->getPosts($slug);

        if (empty($data['posts'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find that post: ' . $slug);
        }
    
        $data['title'] = $data['posts']['title']; 

        echo view('pages/article-detail', $data);       
    }

    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }    
       

        $data = [
            'title'=>ucfirst($page), // Capitalize the first letter 
        ];  
        echo view('pages/' . $page, $data);
    }
}