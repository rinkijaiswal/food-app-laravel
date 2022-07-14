<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response;
    }
}
