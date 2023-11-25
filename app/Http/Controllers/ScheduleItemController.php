<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScheduleItemResource;
use App\Models\Attraction;
use App\Models\ScheduleItem;
use App\Models\Trip;
use Illuminate\Http\Request;

class ScheduleItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'attractionId' => 'required',
            'tripId' => 'required',
        ]);

        $attraction = Attraction::find($validated['attractionId']);

        $trip = Trip::find($validated['tripId']);

        $schedule_item = ScheduleItem::create([
            'attraction_id' => $attraction->id,
            'trip_id' => $trip->id
        ]);

        return new ScheduleItemResource($schedule_item);
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
        $schedule_item = ScheduleItem::findOrFail($id);
        $schedule_item->delete();
        return new ScheduleItemResource($schedule_item);
    }

    public function getForTrip(string $trip_id) {
        $schedule_items = ScheduleItem::where('trip_id', $trip_id)->get();

        return ScheduleItemResource::collection($schedule_items);
    }
}
