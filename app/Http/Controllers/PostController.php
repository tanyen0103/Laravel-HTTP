<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    //Laravel 9 Http cURL GET Request Example
    public function index()
    {
         $response = Http::get('https://jsonplaceholder.typicode.com/posts');
     
         $jsonData = $response->json();
           
        //  
        echo "<pre> status:"; //int
        print_r($response->status());
        echo "<br/> ok:"; //bool
        print_r($response->ok());
        echo "<br/> successful:"; //bool
        print_r($response->successful());
        echo "<br/> serverError"; //bool
        print_r($response->serverError());
        echo "<br/> clientError"; //bool
        print_r($response->clientError());
        echo "<br/> headers:"; //array
        print_r($response->headers());
    }
    //Laravel 9 Http cURL POST Request Example
    public function store()
    {
        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'title' => 'This is test from ItSolutionStuff.com',
            'body' => 'This is test from ItSolutionStuff.com as body',
        ]);

        $jsonData = $response->json();

        dd($jsonData);
    }

    //Laravel 9 Http cURL PUT Request Example
    public function update()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts', [
            'title' => 'This is test from ItSolutionStuff.com',
            'body' => 'This is test from ItSolutionStuff.com as body',
        ]);

        $jsonData = $response->json();

        dd($jsonData);
    }

    //Laravel 9 Http cURL DELETE Request Example
    public function delete()
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/1');
  
        $jsonData = $response->json();
      
        dd($jsonData);
    }
}
