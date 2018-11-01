<?php

namespace App\Http\Controllers;

use App\News;
use App\Regulations;
use App\Laws;
use App\Report;
use DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $news= News::orderBy('id','desc')->paginate(3);
        
            return view('pages.index')->with('news',$news);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {

             
         return view('pages.show' , ['news' =>  $news]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }

    public function vision(){
        return view('pages.vision');
    }


    public function about(){
        return view('pages.about');
    }
   
   public function objectives(){
        return view('pages.objectives');
    }
   

   public function main(){
        return view('pages.maintask');
    }

    public function core(){
        return view('pages.core');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function super(){
        return view('pages.super');
    }

    public function board(){
        return view('pages.board');
    }


    public function zone(){
        return view('pages.zones');
    }

    public function laws(){
        $report= DB::table('laws')->orderBy('id')->paginate(12);
        
            return view('pages.laws')->with('report',$report);
    }

    public function regulations(){
        $report= DB::table('islamic')->orderBy('id')->paginate(8);
        
            return view('pages.regulation')->with('report',$report);
    }

    public function islamic(){
        $report= DB::table('r')->orderBy('id')->paginate(8);
        
            return view('pages.islamic')->with('report',$report);
    }

    public function circulars(){
        return view('pages.circulars');
    }

    public function history(){
        return view('pages.history');
    }


    public function report(){
       $report= DB::table('report')->orderBy('id')->paginate(8);
        
            return view('pages.report')->with('report',$report);
    }

    public function job(){
        $report= DB::table('job')->orderBy('id')->paginate(7);
        
            return view('pages.job')->with('report',$report);
    }

    public function exchange(){
        return view('pages.exchange');
    }
   
   

}
