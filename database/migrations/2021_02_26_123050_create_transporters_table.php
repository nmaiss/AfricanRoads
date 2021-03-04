<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transporters', function (Blueprint $table) {
            $table->id();
            $table->text('mean')->nullable();
            $table->text('mean_image')->nullable();
            $table->text('date')->nullable();
            $table->text('hour')->nullable();
            $table->text('from')->nullable();
            $table->text('to')->nullable();
            $table->Integer('number_places')->nullable();
            $table->text('name')->nullable();
            $table->text('first_name')->nullable();
            $table->text('company')->nullable();
            $table->text('country')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('type')->nullable();
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
        Schema::dropIfExists('transporters');
    }
}
