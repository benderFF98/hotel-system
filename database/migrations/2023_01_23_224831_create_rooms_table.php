<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();

            $table->foreignId('client_id')
                ->nullable()
                ->references('id')
                ->on('clients');

            $table->integer('room_number')->nullable()->unique();
            $table->integer('beds_number');
            $table->text('description')->nullable();
            $table->float('price');
            $table->string('status');

            $table->date('occupied_from')->nullable();
            $table->date('occupied_to')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
