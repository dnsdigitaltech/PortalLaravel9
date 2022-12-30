<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Image;

class AboutController extends Controller
{
    public function AboutPage()
    {
       $aboutPage = About::find(1);
       return view('admin.about_page.about_page_all', ['aboutPage' => $aboutPage]);
    } //End Method
}