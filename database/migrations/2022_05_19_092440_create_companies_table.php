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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'Company_id');
            $table->string(column: 'Company_Name');
            $table->string('Email')->unique();
            $table->string(column: 'Website');
            $table->string(column: 'Address');
            $table->unsignedBigInteger(column: 'Contact_No');
            $table->string(column: 'Bank_Details');
            $table->unsignedBigInteger(column: 'Adhar');
            $table->string(column: 'PAN');
            

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
        Schema::dropIfExists('companies');
    }
};
