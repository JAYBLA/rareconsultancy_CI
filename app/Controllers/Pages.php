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
}