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
        Schema::create('record_misses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('records_id')->constrained();
            $table->string('alphabet', 1);
            $table->integer('type_count'); //正しく入力した回数
            $table->integer('miss_count'); //誤入力した回数
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('record_misses');
    }
};
