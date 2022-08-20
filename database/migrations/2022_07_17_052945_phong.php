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
        Schema::create('phong', function (Blueprint $table) {
            $table->id();
            $table->string('ten_phong');
            $table->integer('gia_phong');
            $table->string('hinh_anh_phong')->nullable();
            $table->string('mo_ta')->nullable();
            $table->integer('ma_loai_phong')->default(1);
            $table->integer('ma_dich_vu')->default(1);
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
        Schema::dropIfExists('phong');
    }
};
