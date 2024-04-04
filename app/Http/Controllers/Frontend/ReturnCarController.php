<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ReturnCarRequest;
use App\Models\Car;
use App\Models\Booking;
use App\Models\ReturnCar;

class ReturnCarController extends Controller
{
    public function index(Car $car)
    {
        return view('frontend.car.returncar', compact('car'));
    }

    public function store(ReturnCarRequest $request)
    {
        $data = $request->validate([
            'nama_lengkap' => 'required',
            'plat' => 'required',
        ]);

        // Check if there is a booking with the provided license plate
        $booking = Booking::whereHas('car', function ($query) use ($data) {
            $query->where('plat', $data['plat']);
        })->first();

        // If a booking with the given license plate exists, consider it a success
        if ($booking) {
            $booking->update(['status' => 'COMPLETE']);

            ReturnCar::create($data);

            return redirect()->back()->with([
                'message' => 'Data successfully returned!',
                'alert-type' => 'success'
            ]);
        } else {
            // If no booking with the given license plate exists, consider it a failure
            return redirect()->back()->with([
                'message' => 'No booking found with the provided license plate!',
                'alert-type' => 'danger'
            ]);
        }
    }
}
