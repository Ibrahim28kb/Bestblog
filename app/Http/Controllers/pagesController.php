<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{

    public function index (){
        $title = ' Hello to index';
        $data1 = ' Blog';
        return view('pages.index',compact('title','data1'));
 
       // return view('pages.index', ['title' => $title]);
       // return view('pages.index', compact('title'));
    }

    public function about (){
        return view('pages.about');
    }

    public function services(){

        $data = [
            'title' => 'The following services are provided: ',
            'services' => [
                'programing','automation','web desing'
            ]
            ];
        return view('pages.services')->with($data);
    }
}
