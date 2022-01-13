<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->nullable()->default(null);
            $table->dateTime('event_date');
            $table->timestamps();
            $table->string('img');
            $table->string('description');
            $table->integer('max_users');
            //$table->integer('current_users');
            $table->boolean('is_it_featured')->default(0);
            $table->string('link')->default(null);
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
