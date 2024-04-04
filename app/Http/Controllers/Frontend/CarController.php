<?php

namespace App\Http\Controllers\Frontend;

use DateTime;
use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\BookingRequest;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::where('status', 1);

        if ($request->category_id && $request->penumpang) {
            $cars = $cars->Where('type_id', $request->category_id)->Where('penumpang', '>=', $request->penumpang);
        }

        $cars = $cars->get();
        return view('frontend.car.index', compact('cars'));
    }

    public function show(Car $car)
    {
        return view('frontend.car.show', compact('car'));
    }

    public function store(BookingRequest $request)
    {
        $data = $request->validate([
            'car_id' =>  'required',
            'nama_lengkap' => 'required',
            'date_start' =>  'required',
            'date_end' =>  'required',
        ]);

        $data['date_due'] = $request->date_end;
        $data['status'] = 'PENDING';
        $price = Car::find($request->car_id);
        $date_start = new DateTime($request->date_start);
        $date_end = new DateTime($request->date_end);
        $duration = $date_start->diff($date_end);
        $data['total'] = $price->price * $duration->days;

        Booking::create($data);

        return redirect()->back()->with([
            'message' => 'kami akan menghubungi anda secepatnya !',
            'alert-type' => 'success'
        ]);
    }
}
