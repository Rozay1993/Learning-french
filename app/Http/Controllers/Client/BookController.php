<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BookController extends Controller
{
    //
    public function index($chapter)
    {
        # code...
        return view('content.client.book.'.$chapter,[
            "chapter" => $chapter,
        ]);
    }
}
