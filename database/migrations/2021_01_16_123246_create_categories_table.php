<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('parent')->default(0);
            $table->string('title', 100)->unique();
            $table->string('title_en', 100)->unique();
            $table->text('text', 100)->nullable();
            $table->string('pic',100)->nullable();
            $table->string('pic_alt', 100)->nullable();
            $table->string('color', 10)->nullable();
            $table->string('keywords', 100)->nullable();
            $table->string('description')->nullable();
            $table->unsignedInteger('sort')->default(0);
            $table->unsignedTinyInteger('status')->default(1);
            $table->unsignedTinyInteger('menu')->default(0);
            $table->softDeleteS();
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
        Schema::dropIfExists('categories');
    }
}
