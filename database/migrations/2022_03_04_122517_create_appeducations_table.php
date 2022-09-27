<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeducations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column:'ApplicantId');
            $table->string(column: 'Institute');
            $table->string(column: 'Type_of_Certificate');
            $table->unsignedBigInteger(column: 'Year_of_Passing');
            $table->unsignedBigInteger(column: 'Percentage');
            $table->string(column: 'Institute_Location');
            $table->string(column: 'Institute_City');
            $table->string(column: 'Institute_State');
            $table->string(column: 'Institute_Country');
            $table->text(column: 'Remarks');
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
        Schema::dropIfExists('appeducations');
    }
};
