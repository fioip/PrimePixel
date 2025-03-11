<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('memory_cards', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('price');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->json('specifications');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('memory_cards');
    }
};
