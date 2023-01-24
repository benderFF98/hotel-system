<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index(Request $request)
    {
        $rooms = Room::beds($request->input('beds'))
            ->price($request->input('price_from'), $request->input('price_to'))
            ->status($request->input('status'))
            ->paginate($request->input('per_page'));

        return response()->json(['rooms' => $rooms]);
    }
    public function store(Request $request)
    {
        $room = Room::updateOrCreate($this->getData($request));

        return response()->json(['room' => $room], 201);
    }

    public function show(Room $room)
    {
    }

    public function update(Request $request, Room $room)
    {
    }

    public function destroy(Room $room)
    {
    }

    public function getData(Request $request)
    {
        return [
            'client_id' => $request->input('client_id'),
            'room_number' => $request->input('room_number'),
            'beds_number' => $request->input('beds_number'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'status' => $request->input('status') ?? 0,
        ];
    }
}
