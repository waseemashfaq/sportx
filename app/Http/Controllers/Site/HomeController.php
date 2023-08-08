<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OffDay;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Service;                          
                            

class HomeController extends Controller
{
    public function index()  
    {
       $blogData= Blog::all();
       $allService=Service::all();

      $alldata=OffDay::all();
       $offDates = [];
      foreach ($alldata as $key => $value) {

        $startDate = Carbon::parse($value->start_date);
        $endDate = Carbon::parse($value->end_date);
        while ($startDate <= $endDate) {
               $offDates[] = $startDate->toDateString();
               $startDate->addDay();
           }
       

       
      }
      return view('site.pages.home',compact('blogData','allService','offDates'));
        
    }
}
