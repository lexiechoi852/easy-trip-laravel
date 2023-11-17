<?php

namespace App\Http\Controllers;

use App\Http\Resources\TripItemResource;
use App\Models\TripItem;
use Illuminate\Http\Request;

class TripItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'overlap' => 'required|boolean',
            'start' => 'required',
            'end' => 'required',
            'attractionId' => 'required',
            'tripId' => 'required',
        ]);

        $trip_item = TripItem::create([
            'overlap' => $validated['overlap'],
            'start' => $validated['start'],
            'end' => $validated['end'],
            'attraction_id' => $validated['attractionId'],
            'trip_id' => $validated['tripId']
        ]);

        return new TripItemResource($trip_item);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $trip_item = TripItem::find($id);
        $trip_item->delete();
        return new TripItemResource($trip_item);
    }

    public function getForTrip(string $trip_id) {
        $trip_items = TripItem::where('trip_id', $trip_id)->get();

        return TripItemResource::collection($trip_items);
    }
}
