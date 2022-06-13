<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('site_email');
            $table->string('site_phone')->nullable();
            $table->text('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('footer_logo')->nullable();
            $table->enum('subscription_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->text('subscription_title')->nullable();
            $table->text('subscription_description')->nullable();
            $table->enum('socialmedia_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->string('facebook', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('googleplus', 255)->nullable();
            $table->string('pinterest', 255)->nullable();
            $table->enum('popup_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->string('popup_logo')->nullable();
            $table->text('popup_text')->nullable();
            $table->enum('popup_button_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->string('popup_button_text', 255)->nullable();
            $table->text('popup_button_link')->nullable();
            $table->enum('popup_button2_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->string('popup_button2_text', 255)->nullable();
            $table->text('popup_button2_link')->nullable();
            $table->enum('popup_button3_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->string('popup_button3_text', 255)->nullable();
            $table->text('popup_button3_link')->nullable();
            $table->enum('popup_button4_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->string('popup_button4_text', 255)->nullable();
            $table->text('popup_button4_link')->nullable();
            $table->enum('newsletter_status', ['Active', 'Inactive'])->nullable()->default('Active');
            $table->string('newsletter_heading', 255)->nullable();
            $table->text('newsletter_text')->nullable();
            $table->string('newsletter_button_text', 255)->nullable();
            $table->string('quick_links_title', 255)->nullable();
            $table->string('get_in_touch_title', 255)->nullable();
            $table->string('testimonial_image', 255)->nullable();
            $table->string('contact_from_email', 255)->nullable();
            $table->string('contact_to_email', 255)->nullable();
            $table->text('about_company')->nullable();
            $table->text('google_analytics')->nullable();
            $table->text('designed_by')->nullable();
            $table->text('copyright')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_settings');
    }
}
