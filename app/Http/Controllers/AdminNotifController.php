<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNotifController extends Controller
{
    public function index()
    {
        return view('admin.notif');
    }
}