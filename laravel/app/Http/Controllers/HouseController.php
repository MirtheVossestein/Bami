<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class HouseController extends Controller
{
    public function addhouse(Request $request){
        $house = new House();

        $house->ownerId = Session::get('loggedInUserId');
        $house->name = $request['house_name'];
        $house->category = $request['house_name'];
        $house->city = $request['house_location'];
        $house->personCapacity = $request['amount_people'];
        $house->rooms = $request['amount_rooms'];
        $house->name = $request['house_name'];
        $house->descriptionLocation = $request['description_location'];
        $house->DescriptionHouse = $request['description_house'];
        $house->price = $request['price'];

        $house->save();
    }
}
