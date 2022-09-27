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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger(column: 'job_id');
            $table->string(column: 'First_Name');
            $table->string(column: 'Last_Name');
            $table->string(column: 'Profile_url')->nullable();
            $table->string(column: 'Rating');
            $table->string(column: 'Remarks')->nullable();
            $table->integer(column: 'Status');
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
        Schema::dropIfExists('items');
    }
};
