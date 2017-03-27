<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsController extends Controller
{
    //
    public function review(Request $request){
        $score=$request->input('score');
        $user=$request->input('user');
        $media_id=$request->input('mediaID');
        $content = $request->input('review_content');
        $review_id=str_random(25);

        $review = new Review();
        $review->id=$review_id;
        $review->review_content=$content;
        $review->author=$user;
        $review->review_rating=$score;
        $review->review_url='';
        $review->save();

        \DB::table('media_review')->insert(['media_id'=>$media_id,'review_id'=>$review_id]);
        return redirect()->route('detail',['id'=>$media_id])->with('status', 'Successfully added your review');



    }
}
