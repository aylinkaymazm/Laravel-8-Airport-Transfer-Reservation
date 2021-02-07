<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferitems', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('transfer_id')->nullable();


            $table->string('from_destination')->nullable();
            $table->string('to_destination')->nullable();
            $table->string('airline')->nullable();
            $table->string('flight_number')->nullable();
            $table->string('flight_arrived_date')->nullable();
            $table->string('flight_arrived_time')->nullable();
            $table->string('pick_up_time')->nullable();

            $table->string('name',20)->nullable();
            $table->string('email',20)->nullable();
            $table->string('phone',10)->nullable();
            $table->string('date',44)->nullable();
            $table->string('time',44)->nullable();
            $table->float('total')->nullable();
            $table->float('price')->nullable();
            $table->string('note',50)->nullable();
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
        Schema::dropIfExists('transferitems');
    }
}
