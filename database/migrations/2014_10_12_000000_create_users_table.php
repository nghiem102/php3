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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nhan_vien');
            $table->string('hinh_anh_nv')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->string('sdt')->nullable();
            $table->string('dia_chi')->nullable();
            $table->integer('scmt')->nullable();
            $table->string('chuc_vu')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phan_quyen')->default(1);
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
};
