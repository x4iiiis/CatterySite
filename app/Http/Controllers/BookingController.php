<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $Booking = new Booking;
        $Booking->inDateTime = date("Y-m-d H:i:s", strtotime($request->inDateTime));
        $Booking->outDateTime = date("Y-m-d H:i:s", strtotime($request->outDateTime)); 
        $Booking->petName = $request->petName;
        $Booking->petSpecies = $request->petSpecies;
        $Booking->specialInstructions = $request->specialInstructions;
        $Booking->userID = $request->userID;

        $Booking->save();

        return $request->all();
    }
}
