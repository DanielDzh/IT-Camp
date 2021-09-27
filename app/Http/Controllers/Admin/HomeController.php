<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Photo;
use App\Models\Review;
use App\Models\Entertainment;
use App\Models\About;
use App\Models\Registered;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $users_count = User::all()->count();
        $teachers_count = Teacher::all()->count();
        $photo_count = Photo::all()->count();
        $reviews_count = Review::all()->count();
        $Entertainments_count = Entertainment::all()->count();
        $registered_count = Registered::all()->count();
        $about_count = About::all()->count();
        return view('admin.home.index',[
            'users_count' => $users_count,
            'teachers_count' => $teachers_count,
            'photo_count' => $photo_count,
            'reviews_count' => $reviews_count,
            'Entertainments_count' => $Entertainments_count,
            'about_count' => $about_count,
            'registered_count' => $registered_count
        ]);
    }
}
