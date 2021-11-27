<?php 
namespace App\Controllers;
use App\Models\FormModel;
use CodeIgniter\Controller;

class ContactForm extends Controller
{

    // public function create() {
    //     return view('contact_form');
    // }

    //Method to Display the Form Page
    public function create($page = 'contact')
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter       
        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    }
    
 
    public function formValidation() {
        helper(['form', 'url']);
        
        $input = $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',           
            'phone' => 'required|numeric|max_length[10]',
            'message' => 'required|min_length[20]'
        ]);

        $formModel = new FormModel();
 
        if (!$input) {
            echo view('contact', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'name' => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),               
                'phone'  => $this->request->getVar('phone'),
                'message'  => $this->request->getVar('message'),
            ]);          

            return $this->response->redirect(site_url('/contact'));
        }
    }

}