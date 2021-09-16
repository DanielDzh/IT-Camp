<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Teacher;
use App\Models\Entertainment;
use App\Models\About;
use App\Models\Photo;
use Illuminate\Http\Request;

class RenderController extends Controller
{
    public function reviewsPage(){

        $posts = Review::all();

        $teachers = Teacher::all();
   
        $entertaiments= Entertainment::all();

        $abouts = About::all();

        $photos = Photo::all(); 

        return view('camp.index',compact('abouts','posts','teachers','entertaiments','photos'));
    }
}
