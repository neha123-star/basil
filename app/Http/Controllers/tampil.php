<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\office;
use App\programming;
use App\desain;

class tampil extends Controller
{
    public function index()
    {
    	return view('index');
    }
    public function office()
    {
    	$office = office::all();
    	return view('office',['office'=>$office]);
    }
    public function programming()
    {
        $programming = programming::all();
        return view('programming',['programming'=>$programming]);
    }
    public function desain()
    {
        $desain = desain::all();
        return view('desain',['desain'=>$desain]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function aksesadmin()
    {
        return view('hanyaadmin');
    }
}
