<?php

namespace App\Http\Controllers\Api;

use App\Models\Bookable;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookableAvailabilityController extends Controller {

    public function __invoke($id, Request $request) {
        $data = $request->validate([
            'from' => 'required|date_format:Y-m-d|after_or_equal:now',
            'to' => 'required|date_format:Y-m-d|after_or_equal:from'
        ]);

        $bookable = Bookable::findOrFail($id);

       return $bookable->availableFor($data['from'], $data['to'])
           ? response()->json([])
           : response()->json([], 404);
    }
}
