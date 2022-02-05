<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GithubReposController extends Controller
{

    public function index()
    {
        return view('data');
    }
    /**
     * function that fetches the data from github repos endpoint
     * 
     * @param Request 
     * @return json
     */
    public function fetchDataFromGithub(Request $request)
    {
        $query = $request->input('search');
        $date = $request->input('date');

        $response = Http::get("https://api.github.com/search/repositories?q=created:%3E2019-01-10&sort=stars&order=desc");

        return view('data', [
            'items' => $response->json()['items']
        ]);
    }
}
