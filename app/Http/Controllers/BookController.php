<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\judul;
class BookController extends Controller
{
    public function index()
    {
        // return view('index');
        $books = books::all();
        return view('index', ['books' => $books]);
    }
}