<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Teacher;
use App\Models\Entertainment;
use Illuminate\Http\Request;

class RenderController extends Controller
{
    public function reviewsPage(){

        $news= new Review();
        $posts= $news->get();

        $newsteachers= new Teacher();
        $teachers= $newsteachers->get();
       
        $newsentertaiments= new Entertainment();
        $entertaiments= $newsentertaiments->get();

        //return view('camp.index',['posts'=>$posts->all()]);
        return view('camp.index',compact('posts','teachers','entertaiments'));
    }
}
