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
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('ten_khach_hang');
            $table->integer('tuoi');
            $table->string('dia_chi');
            $table->integer('scmt');
            $table->string('sdt');
            $table->integer('ma_dich_vu')->default(1);
            $table->integer('ma_phong')->default(1);
            $table->string('ghi_chu')->nullable();
            $table->date('ngay_thue');
            $table->date('ngay_tra');
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
        Schema::dropIfExists('khach_hang');
    }
};
