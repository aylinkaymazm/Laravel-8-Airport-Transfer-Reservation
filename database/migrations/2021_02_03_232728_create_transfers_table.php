<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('name',20);
            $table->string('email',50);
            $table->string('phone',20);
            $table->string('from_destination',150);
            $table->string('to_destination',150);
            $table->string('date',44);
            $table->string('time',44);
            $table->integer('person_number');
            $table->float('total');
            $table->integer('price');
            $table->string('note',50);
            $table->string('IP',20);
            $table->string('status',30)->default('New');
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
        Schema::dropIfExists('transfers');
    }
}
