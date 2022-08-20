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
        Schema::create('dich_vu', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dich_vu');
            $table->string('mo_ta');
            $table->integer('gia_dich_vu');
            $table->integer('trang_thai')->default(1);

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
        Schema::dropIfExists('dich_vu');
    }
};
