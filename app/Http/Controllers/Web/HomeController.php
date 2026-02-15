<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // API call internally
        $response = Http::get(url('/api/v1/home'));

        $data = $response->json();

        return view('front.home', compact('data'));

    }
}
