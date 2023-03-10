<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('calligraphy_categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name', 255);
            $table->string('category_image')->default('uploads/cateImages/noImage.jpg');
            $table->text('category_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calligraphy_categories');
    }
};
