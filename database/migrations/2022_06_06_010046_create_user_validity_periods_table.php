<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserValidityPeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_validity_periods', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->string('name', 255);
            $table->dateTime('start_dt');
            $table->dateTime('end_dt');
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
        Schema::dropIfExists('user_validity_periods');
    }
}
