<?php

namespace App\Controllers;

use App\Models\User;

class Blogcontroller extends BaseController
{
    public function index()
    {

        echo view('templates/header');
        echo view('blog/myblog');
        echo view('templates/footer');
    }
}
