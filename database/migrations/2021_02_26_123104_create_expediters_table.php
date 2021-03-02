<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpeditersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expediters', function (Blueprint $table) {
            $table->id();
            $table->text('from')->nullable();
            $table->text('to')->nullable();
            $table->text('urgent')->nullable();
            $table->text('delay')->nullable();
            $table->text('weight')->nullable();
            $table->text('description')->nullable();
            $table->text('name')->nullable();
            $table->text('first_name')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('type')->nullable();
            $table->text('date')->nullable();
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
        Schema::dropIfExists('expediters');
    }
}
