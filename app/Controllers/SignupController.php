<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SignupController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('dashboard/signup', $data);
    }
  
    public function store()
    {
        helper(['form']);

        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){

            $userModel = new UserModel();
            $name=$this->request->getPost('name');
            $email=$this->request->getPost('email');
            $password=$this->request->getPost('password');


            $data = [
                'name'     => $name,
                'email'    => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ];

            $userModel->save($data);

            return redirect()->to('dashboard/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('dashboard/signup', $data);
        }
          
    }
  
}