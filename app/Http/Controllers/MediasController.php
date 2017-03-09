<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Trailer;
use App\Models\Cast;
use App\Models\MediaToCast;

class MediasController extends Controller
{
    //

    public function index(){

        $new_movies=Media::where([['status','=','Released'], ['release_date','<=',date('Y-m-d')]])->orderBy('release_date', 'desc')->take(4)->get();
        $top_rated = Media::where([['status','=','Released']])->orderBy('vote_average','desc')->take(4)->get();
        $upcoming_movies = Media::where([['title','!=',''],['release_date','>',date('Y-m-d')]])->orderBy('release_date','asc')->take(4)->get();
        return view('pages.index', compact('new_movies','top_rated','upcoming_movies'));
    }

    public function detail($id){
        $movie_detail = Media::find($id);
        $trailers = Trailer::find($id);

        $casts=Media::find($id)->casts->where('cast_character','!=','')->take(5);
        $staffs=Media::find($id)->casts->where('department','!=','')->take(5);

        return view ('pages.movie_detail', compact('movie_detail','trailers','casts', 'staffs'));
    }

}
