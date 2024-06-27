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
        $house->addresss = $request['adress'];
        $house->zipcode = $request['zipcode'];
        $house->personCapacity = $request['amount_people'];
        $house->rooms = $request['amount_bedrooms'];
        $house->descriptionLocation = $request['description_location'];
        $house->DescriptionHouse = $request['description_house'];
        $house->price = $request['price'];
    
        $house->save(); // Save the house first to generate an ID

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $path = $imageFile->store('images', 'public');
                $image = new Image();
                $image->house_id = $house->id;
                $image->image = $path;
                $image->save();
            }
        }

        $houses = House::all(); // Retrieve all houses
    
        return view('ownerhouse', compact('houses'));
    }
    
    public function showHouses()
    {
        $houses = House::all(); // Retrieve all houses

        return view('ownerhouse', compact('houses')); // Pass houses (with images) to the view
    }

    public function displayHouses(){
        $houses = House::all();
        
        // dd($houses[0]->images);
        return view('houses', compact('houses'));
    }
}