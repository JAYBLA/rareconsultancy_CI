<?php

namespace App\Controllers;
use App\Models\ContactModel;
use CodeIgniter\Controller;

class Pages extends Controller
{
    public function home()
    {
        $data['title'] = "Home";
        echo view('pages/home', $data);       
    }

    public function brela()
    {
        $data['title'] = "BRELA Help Desk";
        echo view('pages/brela', $data);       
    }

    public function articles()
    {
        $data['title'] = "Articles";
        echo view('pages/articles', $data);       
    }

    public function trainings()
    {
        $data['title'] = "Trainings";
        echo view('pages/trainings', $data);       
    }

    public function advisory()
    {
        $data['title'] = "Advisory";
        echo view('pages/advisory', $data);       
    }

    public function contact()
    {   $model = model(ContactModel::class);
        $session = session();
        $session->setFlashdata("submitted", "This message is for end users #1");
        $session->markAsFlashdata("submitted", "This message is for end users #1");

        if ($this->request->getMethod() === 'post' && $this->validate([
            'full_name' => 'required|min_length[3]|max_length[180]',
            'email'  => 'required|max_length[30]',
            'phone' => 'required|max_length[13]',
            'message' => 'required'
        ])) {
            $model->save([
                'full_name' => $this->request->getPost('full_name'),
                'email' => $this->request->getPost('email'),
                'phone' => $this->request->getPost('phone'),
                'message' => $this->request->getPost('message'),                
            ]);

            redirect('/contact');
        } else {            
            $data['title'] = "Contact Us"; // Capitalize the first letter
            echo view('pages/contact', $data); 
        }
      
    }
}