<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminForm_ElementsController extends Controller
{
    public function index()
    {
        return view('admin.form-elements');
    }
}
