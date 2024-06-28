<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

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
    
        $house->save(); 

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $path = $imageFile->store('images', 'public');
                $image = new Image();
                $image->house_id = $house->id;
                $image->image = $path;
                $image->save();
            }
        }

        $houses = House::all(); 
    
        return view('ownerhouse', compact('houses'));
    }

    public function deleteHouse(Request $request)
    {
        $house = House::find($request['houseId']);

        $house->delete();

        return view('ownerhouse');
    }
    
    public function showHouses()
    {
        $houses = House::all(); 

        return view('ownerhouse', compact('houses')); 
    }

    public function displayHouses(){
        $houses = House::all();
        
        
        return view('houses', compact('houses'));
    }
}