<?php

namespace LSAPP\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index(){
        $title="Welcome to hell";
        //return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function About(){
        $title="About Us";
        return view('pages.about')->with('title',$title);
    }

    public function Services(){
        $data=array(
            "title"=>"Services",
            "services"=>["Web design","Programming","SEO"]
        );
        return view('pages.services')->with($data);
    }
}
