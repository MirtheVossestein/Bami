<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class HouseController extends Controller
{
    public function addhouse(Request $request){
        $house = new House();
    
        $house->ownerId = Session::get('loggedInUserId');
        $house->category = $request['house_name'];
        $house->city = $request['house_location'];
        $house->address = $request['adress'];
        $house->zipcode = $request['zipcode'];
        $house->personCapacity = $request['amount_people'];
        $house->rooms = $request['amount_bedrooms'];
        $house->descriptionLocation = $request['description_location'];
        $house->DescriptionHouse = $request['description_house'];
        $house->price = $request['price'];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imageBlob = file_get_contents($imageFile->getRealPath());
        
                $image = new Image();
                $image->houseId = $house->id;
                $image->image = $imageBlob;
                $image->save();
            }
        }

        $house->save();

        $houses = House::all(); // Retrieve all houses
    
        return view('ownerhouse', compact('houses'));
    }

    public function showHouses()
    {
        $houses = House::all(); // Retrieve all houses
        return view('ownerhouse', compact('houses')); // Pass houses to the view
    }
}

