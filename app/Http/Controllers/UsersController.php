<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\Review;

class UsersController extends Controller
{
    //

    public function login(Request $request)
    {
        $username = $request->input('login-username');
        $password = $request->input('login-password');
        $remember = $request->input('login-remember-me');
        $media_id = $request->input('media_id');
        if (\Auth::attempt(['email' => $username, 'password' => $password], $remember)) {
            if ($media_id == null) {
                return redirect()->action('MediasController@index');
            } else {
                return redirect()->route('detail', ['id' => $media_id]);
            }
        } else {
            return redirect('/login')->with('error', 'Wrong UserName and/or Password');
        }
    }

    public function profile(){

        $user_email = \Auth::user()->email;

        $tv_reviews = count(\DB::table('medias')->join('media_review', 'media_review.media_id','=','medias.id')->join('reviews','reviews.id','=','media_review.review_id')
            ->select('medias.id')->where([['medias.type','=','TV'],['reviews.author','=',$user_email]])->get());

        $movie_reviews = count(\DB::table('medias')->join('media_review', 'media_review.media_id','=','medias.id')->join('reviews','reviews.id','=','media_review.review_id')
            ->select('medias.id')->where([['medias.type','=','Movie'],['reviews.author','=',$user_email]])->get());


        $review_ratings =\DB::table('medias')->join('media_review', 'media_review.media_id','=','medias.id')->join('reviews','reviews.id','=','media_review.review_id')
            ->select('reviews.review_rating')->where([['reviews.author','=',$user_email]])->get();

        return view('pages.user_profile',compact('movie_reviews','tv_reviews','review_ratings'));

    }

    public function watchlist($id){

    }

}
