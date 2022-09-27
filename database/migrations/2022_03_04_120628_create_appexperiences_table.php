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
        Schema::create('appexperiences', function (Blueprint $table) {
            $table->id();
            $table -> string('Applicant_Id');
            $table->string('Company_Name');
            $table->string('Company_Website');
            $table ->string('Job_Position');
            $table->string('Company_city');
            $table->date('Emp_Start_Date');
            $table->date('Emp_End_Date');
            $table->string('Remarks');
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
        Schema::dropIfExists('appexperiences');
    }
};
