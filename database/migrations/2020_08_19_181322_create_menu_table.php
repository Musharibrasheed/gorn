<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->enum('menu_type',['Primary','Footer'])->nullable();
            $table->enum('status',['Active','Inactive'])->default('Active');
            $table->enum('type',['Custom','Page'])->nullable();
            $table->integer('page_id')->nullable();
            $table->string('url')->nullable();
            $table->tinyInteger('hide_customer')->nullable()->default('0');
            $table->integer('sort')->default(0)->nullable();
            $table->integer('new_window')->default(0)->nullable();
            $table->unsignedInteger('created_by');
            $table->softDeletes();
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
        Schema::dropIfExists('menu');
    }
}
