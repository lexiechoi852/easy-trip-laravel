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
        $schedule_items = ScheduleItem::all();
        return ScheduleItemResource::collection($schedule_items);
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

        $attraction = Attraction::find($request->input('attractionId'));

        $trip = Trip::find($request->input('tripId'));

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
        $schedule_item = ScheduleItem::find($id);
        $schedule_item->delete();
        return $schedule_item;
    }
}
