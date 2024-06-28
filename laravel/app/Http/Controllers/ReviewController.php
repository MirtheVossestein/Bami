<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    public function addReview(Request $request){
        $review = new Review();
    
        $review->userId = Session::get('loggedInUserId');
        $review->houseId = $request['houseId'];
        $review->stars = $request['stars'];
        $review->date = $request['date'];
        $review->description = $request['description'];
    
        $review->save();
    }
}
