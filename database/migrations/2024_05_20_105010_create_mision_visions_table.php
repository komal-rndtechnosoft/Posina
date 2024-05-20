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
        Schema::create('mision_visions', function (Blueprint $table) {
            $table->id();
            $table->string('about_title');
            $table->string('about_description');
            $table->string('image');
           $table->string('about_title1');
            $table->string('about_description1');
            $table->string('image1');
            $table->string('alt_tag');
            $table->string('alt_tag1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mision_visions');
    }
};
