<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookable extends Model {
    use HasFactory;

    public $fillable = [
        'title',
        'description',
    ];

    public function bookings() {
        return $this->hasMany(Booking::class);
    }

    public function availableFor($from, $to): bool{
        return 0 === $this->bookings()->betweenDates($from, $to)->count();
    }
}
