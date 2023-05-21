<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_news_id')->unsigned();
            $table->foreign('category_news_id')->references('id')->on('category_news')->onDelete('cascade');
            
            $table->string('name')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->longText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('images')->nullable();
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
        Schema::dropIfExists('news');
    }
}
