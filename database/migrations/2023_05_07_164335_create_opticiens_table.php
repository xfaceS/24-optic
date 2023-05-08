<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpticiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opticiens', function (Blueprint $table) {
            $table->id();
            
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('images')->nullable();
            $table->string('ville')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opticiens');
    }
}
