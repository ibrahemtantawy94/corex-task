<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GithubReposController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.github.com/search/repositories?q=created:%3E2019-01-10&sort=stars&order=desc');

        return $response->json();
    }
}
