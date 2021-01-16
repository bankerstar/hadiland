<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function(Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('avatar',100)->nullable();
            $table->unsignedTinyInteger('avatar_flag')->default(0); //default=0 un_default=1
            $table->unsignedTinyInteger('news_receive')->default(0); //de_active=0 active=1
            $table->string('national_code',10)->nullable();
            $table->unsignedTinyInteger('sex')->default(1); //man=1 woman=1
            $table->string('bill',20)->nullable();
            $table->string('bill_card',20)->nullable();
            $table->string('birthday',15)->nullable();
            $table->unsignedTinyInteger('status')->default(1); //de_active=0 active=1


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
        Schema::dropIfExists('user_details');
    }
}
