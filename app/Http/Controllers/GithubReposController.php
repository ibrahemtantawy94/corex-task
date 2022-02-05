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
        $date = $request->input('date') ?: '2019-01-10';
        $language = $request->input('language');
        $top = $request->input('top');
        $url = "https://api.github.com/search/repositories?";
        $query = "q=created:>$date";
        $query = $language ? $query . "+language:$language" : $query;
        $query .= "&per_page=$top&sort=stars&order=desc";
        $response = Http::get($url.$query);

        $items = isset($response->json()['items']) ? $response->json()['items'] : null;

        return view('data', [
            'items' => $items
        ]);
    }
}
