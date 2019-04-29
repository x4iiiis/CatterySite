<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $booking = new Booking;
        $Booking->inDateTime = $request->inDateTime;
        $Booking->outDateTime = $request->outDateTime;
        $Booking->petName = $request->petName;
        $Booking->petSpecies = $request->petSpecies;
        $Booking->specialInstructions = $request->specialInstructions;
        $Booking->userID = $request->userID;

        $Booking->save();

        return $request->all();
    }
}
