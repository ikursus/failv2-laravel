<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function halamanUtama()
    {
        return view('welcome');
    }

    function halamanLogin()
    {
        return view('authentication/templateLogin');
    }

    function halamanContact()
    {
        return view('welcome');
    }
}
