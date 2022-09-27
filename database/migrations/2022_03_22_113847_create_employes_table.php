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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'Employee_Name');
            $table->string(column: 'Position');
            $table->string(column: 'Email')->unique();
            $table->unsignedBigInteger(column: 'Mobile_Num')->unique();
            $table->string(column: 'Team');
            $table->date(column: 'Date');
            $table->string(column: 'Status');
            $table->string(column: 'Profile_url')->nullable();
            $table->string('Remarks')->nullable();
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
        Schema::dropIfExists('employes');
    }
};
