<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function home()
    {
        $news = \App\News::orderBy('id', 'DESC')->take(3)->get();
        return view('pages.home', ['news' => $news]);
    }
    public function about()
    {
        $page = \App\AboutPage::All()->first();      
        return view('pages.about', ['page' => $page]);
    }
    public function news()
    {
        $news = \App\News::orderBy('id', 'DESC')->paginate(5);
        return view('pages.news', ['news'=> $news]);
    }
    public function tariffs()
    {
        $page = \App\TariffPage::All()->first();      
        return view('pages.tariffs', ['page' => $page]);
    }
    public function houses()
    {
        $houses_alive = \App\House::orderBy('title', 'ASC')->where('alive', 1)->get();
        $houses_not_alive = \App\House::orderBy('title', 'ASC')->where('alive', 0)->get();
        return view('pages.houses', ['houses_alive'=> $houses_alive, 'houses_not_alive'=>$houses_not_alive]);
    }

    public function house($id)
    {
        $house = \App\House::findOrFail($id);
        return view('pages.house', ['house'=> $house]);
    }
    
    public function contacts()
    {
        $page = \App\ContactsPage::all()->first();
        return view('pages.contacts', ['page'=> $page]);
    }
}
