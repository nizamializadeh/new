<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceBrnachOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_brnach_offices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('place_id')->index();
            $table->foreign('place_id')->references('id')->on('places');
            $table->unsignedInteger('branch_id')->index();
            $table->foreign('branch_id')->references('id')->on('branch_offices');
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
        Schema::dropIfExists('place_brnach_offices');
    }
}
