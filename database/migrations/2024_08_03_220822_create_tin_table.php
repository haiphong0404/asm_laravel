<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTable extends Migration
{
    public function up()
    {
        Schema::create('tin', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->foreignId('category_id')->constrained('categories');
            $table->string('image')->nullable(); // Thêm trường ảnh
        });
    }

    public function down()
    {
        Schema::dropIfExists('tin');
    }
}

