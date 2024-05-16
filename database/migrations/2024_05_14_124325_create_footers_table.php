<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('alt_tag');
            $table->string('news_description');
            $table->string('instagram_link');
            $table->string('facebook_link');
            $table->string('twitter_link');
            $table->string('phone1');
            $table->string('email1');
            $table->string('address');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
