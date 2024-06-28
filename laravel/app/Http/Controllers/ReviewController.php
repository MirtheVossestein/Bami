<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    public function addReview(Request $request){
        if(Session::get('loggedInUserId')){
            $review = new Review();
            $review->userId = Session::get('loggedInUserId');
            $review->houseId = $request['houseId'];
            $review->stars = $request['rating'];
            $review->date = now()->toDateString();
            $review->description = $request['description'];
        
            $review->save();

            return view('index');
        } else{
            return view('index');
        }
    }
}
