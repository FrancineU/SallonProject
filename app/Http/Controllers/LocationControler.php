<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationControler extends Controller
{
  
    public function home(){
       $locations=Location::get();

        return view('location');
    }

public function save(REQUEST $request){
     
      $location=new Location();
      $lacation->province= $request->province;
      $location->district= $request->district;
      $location->cell= $request->cell;
      $location->save();
      return redirect()->back();

}

}
