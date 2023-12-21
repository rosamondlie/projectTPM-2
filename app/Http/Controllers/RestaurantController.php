<?php

namespace App\Http\Controllers;

use App\Models\location;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Storage;
class RestaurantController extends Controller
{
    public function redirectToAddReviewPage(){
        $locations=location::all();
        return view('rate_restaurant', compact('locations'));
    }

    public function AddReviewRestaurant(Request $request){

        
        $validated = $request->validate([
            'Restaurant_Name_input'=>'required||max:255',
            'Restaurant_image_input'=>'required|mimes:jpg,jpeg,png',
            'Location_input'=>'required',
            'Rate_input'=>'required',
            'Reviews_input'=>'required'
        ]);

        //insert to database
        // dd($request);
        $path = $request->file('Restaurant_image_input');
        $restaurant = Restaurant::create([
            'Restaurant_Name' => $request ->Restaurant_Name_input,
            'Restaurant_image_path'=>$path,
            'location_id' => $request->Location_input,
            'Rate' => $request->Rate_input,
            'Reviews' => $request->Reviews_input
        ]);

        //convert string nama asli+id
        $fileName=$restaurant->id.$path->getClientOriginalName();
        $path->storeAs('public/image_resto', $fileName);
        $restaurant->Restaurant_image_path='image_resto/'.$fileName;
        $restaurant->save();

        return redirect('/home');
    }

    public function updateReviewPage($id){
        $restaurant = Restaurant::findOrFail($id);
        $locations = location::all();
        // return view('update_restaurant',["restaurant"=>$restaurant]);
        return view('update_restaurant',compact('restaurant','locations'));
        // dd($restaurant);
        // dd($id);
        // return $id;
    }

    public function updateReview(Request $request, $id){
        $validated = $request->validate([
            'Restaurant_Name_input'=>'required||max:255',
            'Restaurant_image_input'=>'required|mimes:jpg,jpeg,png',
            'Location_input'=>'required',
            'Rate_input'=>'required',
            'Reviews_input'=>'required'
        ]);
        $restaurant=Restaurant::find($id);
        Storage::delete('/public/'.$restaurant->Restaurant_image_path);
        $path = $request->file('Restaurant_image_input');
        Restaurant::findOrFail($id)->update([
            'Restaurant_Name' => $request ->Restaurant_Name_input,
            'Restaurant_image_path'=>$path,
            'location_id' => $request->Location_input,
            'Rate' => $request->Rate_input,
            'Reviews' => $request->Reviews_input
        ]);
        $restaurant=Restaurant::find($id);
        // $status_delete = Storage::delete('storage/'.$restaurant->Restaurant_image_path);
        $fileName=$restaurant->id.$path->getClientOriginalName();
        $path->storeAs('public/image_resto', $fileName);
        $restaurant->Restaurant_image_path='image_resto/'.$fileName;
        $restaurant->save();

        return redirect('/home');
    }

    public function deleteReview($id){
        // Restaurant::findOrFail($id)->delete();
        Restaurant::destroy($id);
        return redirect('/home');
    }
}
