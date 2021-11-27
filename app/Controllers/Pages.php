<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    //Method to Handle Home Page
    public function default($page = 'home')
    {
        $data['title'] = ucfirst($page); // Capitalize the first letter       
        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    }


    //Method to Handle Other Pages
    public function view($page = '')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }        

        $data['title'] = ucfirst($page); // Capitalize the first letter       
        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    }

}