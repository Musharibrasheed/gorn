<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talents', function (Blueprint $table) {
            $table->id();
            $table->enum('talent_type', ['Freelance', 'Company', 'Employee', 'Ex-Empyloyee'])->nullable()->default('Freelance');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_contact_fname')->nullable();
            $table->string('company_contact_lname')->nullable();

            $table->tinyInteger('is_agency')->nullable();
            $table->string('agency_contact_fname')->nullable();
            $table->string('agency_contact_lname')->nullable();

            $table->text('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('phone_mobile')->nullable();
            $table->string('phone_fixed')->nullable();
            $table->string('internal_contact')->nullable();
            $table->string('other_clients')->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Holiday'])->nullable()->default('Active');
            $table->integer('drivers_license')->nullable();
            $table->integer('worked_before')->nullable();
            $table->date('birthday')->nullable();

            $table->integer('var')->nullable();
            $table->date('var_expiry_date')->nullable();

            $table->integer('nda')->nullable();
            $table->date('nda_expiry_date')->nullable();

            $table->integer('internal_contract')->nullable();
            $table->date('internal_contract_expiry_date')->nullable();

            $table->text('notes')->nullable();
            $table->integer('dayrate')->nullable();

            $table->text('profile_image')->nullable();

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
        Schema::dropIfExists('talents');
    }
}
