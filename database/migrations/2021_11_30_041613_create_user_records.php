<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_records', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('vaksin',16);
            $table->datetime('tanggal_vaksin');
            $table->string('tempat_vaksin');
            $table->string('status',16);
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
        Schema::dropIfExists('user_records');
    }
}
