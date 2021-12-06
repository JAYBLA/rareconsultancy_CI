<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArticleModel;

class Dashboard extends Controller
{

    public function index()
    {
        $data['title'] = "Panel";
        helper(['form', 'url']);
        $this->ArticleModel = new ArticleModel();
        $data['articles'] = $this->ArticleModel->get_all_articles();
        return view('dashboard/index', $data ) ;
    }

    // BLOG MODULE
    public function article_add() {
        helper(['form', 'url']);
        $this->ArticleModel = new ArticleModel();
        $data = array(        
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),            
        );
        $insert = $this->ArticleModel->article_add($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_post($id) {
        $this->ArticleModel = new ArticleModel();
        $data = $this->ArticleModel->get_by_id($id);
        echo json_encode($data);
    }
    public function article_update() {
        helper(['form', 'url']);
        $this->ArticleModel = new ArticleModel();
        $data = array(            
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),            
        );
        $this->ArticleModel->article_update(array('id' => $this->request->getPost('id')),$data);
        echo json_encode(array("status" => TRUE));
    }
    public function article_delete($id) {
        helper(['form', 'url']);
        $this->ArticleModel = new ArticleModel();
        $this->ArticleModel->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}