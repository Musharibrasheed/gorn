<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyNowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_now', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',191)->nullable();
            $table->string('last_name',191)->nullable();
            $table->string('email',191)->nullable();
            $table->string('mobile_number',191)->nullable();
            $table->text('address')->nullable();
            $table->string('city',191)->nullable();
            $table->string('state',191)->nullable();
            $table->string('zip_code',191)->nullable();
            $table->string('country',191)->nullable();
            $table->string('filename',191)->nullable();
            $table->string('experience',191)->nullable();
            $table->string('ert',5)->nullable();
            $table->string('vp',5)->nullable();
            $table->string('about_go_rn',191)->nullable();
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
        Schema::dropIfExists('apply_now');
    }
}
