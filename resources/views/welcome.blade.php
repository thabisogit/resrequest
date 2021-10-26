@extends('layouts.app')
<body>
<div class="loading" style="display: none">Loading&#8230;</div>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Make your reservation</h1>
                    </div>
{{--                    <form method="post" action="{{ route('reservation.store') }}" class="form-horizontal">--}}
{{--                        @csrf--}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Hotel</span>
                                    <select class="form-control" name="hotel" id="hotel">
                                        <option value="">Please Select Hotel</option>
                                        @foreach ($hotels as $hotel)
                                            <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Room Type</span>
                                    <select class="form-control" name="room_type" id="room_type">
                                        <option value="">Please Select Room Type</option>
                                        @foreach ($roomTypes as $roomType)
                                            <option value="{{$roomType->id}}">{{$roomType->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="form-label">Room</span>
                                    <select class="form-control" name="room" id="room">
                                        <option value="">Please Select Room</option>
                                        @foreach ($rooms as $room)
                                            <option value="{{$room->id}}">{{$room->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Check In</span>
                                    <input class="form-control" name="from_date" id="from_date" type="date" value="{{ old('from_date') }}" required>
                                </div>
                                <span class="in-out hidden-xs hidden-sm">&#8652;</span>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Check out</span>
                                    <input class="form-control" name="to_date" id="to_date" type="date" value="{{ old('to_date') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="form-label">No of rooms</span>
                                    <select class="form-control" name="number_of_rooms" id="number_of_rooms">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="form-label">Adults</span>
                                    <select name="number_of_adults" id="number_of_adults" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <span class="form-label">Children</span>
                                    <select name="number_of_children" id="number_of_children" class="form-control">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-btn">
                                    <button class="submit-btn" style="display: none">Book Now!</button>
                                    <button type="button" class="btn btn-info" style="height: 50px;"></i>Check availability</button>
                                </div>
                            </div>
                        </div>
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
