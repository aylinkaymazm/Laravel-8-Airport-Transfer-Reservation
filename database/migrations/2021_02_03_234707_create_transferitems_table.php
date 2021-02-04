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
            $table->integer('user_id');
            $table->integer('transfer_id');
            $table->integer('product_id');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('from_destination',150);
            $table->string('to_destination',150);
            $table->string('date',44);
            $table->string('time',44);
            $table->integer('person_number');
            $table->float('amount');
            $table->string('note',50);
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
