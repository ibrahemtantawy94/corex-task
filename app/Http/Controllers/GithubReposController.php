<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GithubReposController extends Controller
{
    public function index()
    {
        return response()->json([
            'name' => 'ibrahem tantawy',
            'testing' => true
        ]);
    }
}
