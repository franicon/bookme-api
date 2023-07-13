<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BookableIndexResource;
use App\Http\Resources\BookableShowResource;
use App\Models\Bookable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookableController extends Controller {
    // Return all Bookables
    public function index() {
        return BookableIndexResource::collection(
            Bookable::all()
        );
    }

    // Return all Single Bookable with ID
    public function show($id) {
        return new BookableShowResource(Bookable::findOrFail($id));
    }
}
