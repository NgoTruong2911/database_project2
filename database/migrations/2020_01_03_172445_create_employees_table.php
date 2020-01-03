<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('id')->on('warehouses');

            $table->unsignedBigInteger('transaction_point_id');
            $table->foreign('transaction_point_id')->references('id')->on('transaction_points');

            $table->integer('province_id');
            $table->integer('district_id');
            $table->integer('ward_id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('avatar');
            $table->integer('gender');
            $table->string('address');
            $table->string('password');
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
        Schema::dropIfExists('employees');
    }
}
