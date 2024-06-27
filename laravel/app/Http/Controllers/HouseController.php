<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    
        $house->save(); // Save the house first to generate an ID

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $imageFile) {
                $imageBlob = file_get_contents($imageFile->getRealPath());
        
                $image = new Image();
                $image->houseId = $house->id; // Use the house ID after the house is saved
                $image->image = base64_encode($imageBlob); // Convert binary data to base64
                $image->save();
            }
        }

        $houses = House::all(); // Retrieve all houses
    
        return view('ownerhouse', compact('houses'));
    }
    
    public function showHouses()
    {
        $houses = House::all(); // Retrieve all houses

        foreach ($houses as $house) {
            $images = Image::where('houseId', $house->id)->get(); // Fetch images for each house

            $decodedImages = [];
            foreach ($images as $image) {
                // Decode each image's BLOB data
                $decodedImages[] = base64_decode($image->image);
            }

            // Attach the decoded images to the house object
            $house->decodedImages = $decodedImages;
        }

        return view('ownerhouse', compact('houses')); // Pass houses (with images) to the view
        }
}