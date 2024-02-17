<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Main routs functions:

    public function homePage()
    {
        return view('index');
    }

    public function listingPage()
    {
        return view('listing');
    }

    public function testimonialsPage()
    {
        return view('testimonials');
    }

    public function blogPage()
    {
        return view('blog');
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }

}
// <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
//                 <ul class="site-menu main-menu js-clone-nav ml-auto ">
//                   <li><a href="{{ route('homePage') }}" class="nav-link">Home</a></li>
//                   <li><a href="{{ route('listing') }}" class="nav-link">Listing</a></li>
//                   <li><a href="testimonials.html" class="nav-link">Testimonials</a></li>
//                   <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
//                   <li class="active"><a href="{{ route('about') }}" class="nav-link">About</a></li>
//                   <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
//                 </ul>
//               </nav>