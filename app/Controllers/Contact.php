<?php

namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\Controller;

class Contact extends Controller
{
    public function index()
    {
        $model = model(ContactModel::class);
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
            session()->setFlashdata('status_txt', 'We will contact you soon!');
            return redirect()->to(base_url('contact'))
            ->with('status_icon', 'success')
            ->with('status','Form Submitted Successfully');
        } else {            
            $data['title'] = "Contact Us"; // Capitalize the first letter
            echo view('pages/contact', $data); 
        }
      
    }
}