<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
class MediasController extends Controller
{
    //

    public function index(){
        $new_movies=Media::where([['category','=','NowPlaying'],['status','=','Released']])->orderBy('release_date', 'desc')->take(4)->get();
        $top_rated = Media::where([['category','=','TopRated'],['status','=','Released']])->orderBy('vote_average','desc')->take(4)->get();
        $upcoming_movies = Media::where([['category','=','Upcoming'],['status','!=','Released'],['title','!=','']])->orderBy('release_date','asc')->take(4)->get();
        return view('pages.index', compact('new_movies','top_rated','upcoming_movies'));
    }

    public function detail($id){
        $movie_detail = Media::find($id);


        return view ('pages.movie_detail', compact('movie_detail'));
    }

}
