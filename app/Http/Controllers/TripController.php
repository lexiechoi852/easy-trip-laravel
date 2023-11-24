<?php

namespace App\Http\Controllers;

use App\Http\Resources\TripResource;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::with('trip_items.attractions')->get();
        return TripResource::collection($trips);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'name' => 'required',
            'city' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'userId' => 'required',
        ]);

        $trip = Trip::create([
            'name' => $validated['name'],
            'city' => $validated['city'],
            'start_date' => $validated['startDate'],
            'end_date' => $validated['endDate'],
            'user_id' => $validated['userId']
        ]);

        return new TripResource($trip);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trip = Trip::with('trip_items.attractions')->find($id);
        return new TripResource($trip);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getForUser(string $user_id) {
        $trips = Trip::where('user_id', $user_id)->get();

        return TripResource::collection($trips);
    }
}
