<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {

    public function up() {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('from');
            $table->date('to');
            $table->unsignedBigInteger('bookable_id')->index();
            $table->foreign('bookable_id')->references('id')->on('bookables');
        });
    }

    public function down() {
        Schema::dropIfExists('bookings');
    }
};
