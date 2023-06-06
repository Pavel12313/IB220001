<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($id)
    {
        return "test bango ha:". $id;
    }
}
