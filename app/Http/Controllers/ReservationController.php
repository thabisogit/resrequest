<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Reservation;
use App\Room;
use App\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        $rooms = Room::all(); //sort by //TODO
        $roomTypes = RoomType::all();
        return view('welcome',compact('hotels','rooms','roomTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->number_of_children);
        $request->validate(['hotel_id' => 'required','room_id' => 'required','from_date' => 'required','to_date' => 'required','number_of_rooms' => 'required','number_of_adults' => 'required','number_of_children' => 'required']);
        Reservation::create([
            'hotel_id'=>$request->hotel_id,
            'room_id'=>$request->room_id,
            'from_date'=>$request->from_date,
            'to_date'=>$request->to_date,
            'number_of_rooms'=>$request->number_of_rooms,
            'number_of_adults'=>$request->number_of_adults,
            'number_of_children'=>$request->number_of_children
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $resevertion
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $resevertion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $resevertion
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $resevertion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $resevertion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $resevertion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $resevertion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $resevertion)
    {
        //
    }


    public function checkAvailability(Request $request){
        $reservations = DB::select(
            'select * from (SELECT *, '.$request->from_date.' as new_from_date,
                  '.$request->to_date.' as new_to_date FROM `reservations`)
                  mt WHERE mt.hotel_id = '.$request->hotel_id.'
                  and mt.room_id = '.$request->room_id.'
                  and mt.new_from_date
                  BETWEEN mt.from_date AND mt.to_date');

        return(empty($reservations) ? 0:1);
    }
}
