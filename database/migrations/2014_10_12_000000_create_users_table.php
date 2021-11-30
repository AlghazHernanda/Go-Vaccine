<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nik',16);
            $table->string('nama',30);
            $table->string('tempat_lahir',12);
            $table->date('tanggal_lahir');
            $table->char('jk',1);
            $table->char('gol_darah',2);
            $table->string('alamat',100);
            $table->string('email',30)->unique();
            $table->string('no_hp',13);
            $table->string('password');
            $table->char('role',5);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
