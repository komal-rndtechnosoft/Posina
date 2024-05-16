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
        Schema::create('whoweares', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            $table->string('alt_tag1')->nullable();
            $table->string('alt_tag2')->nullable();
            $table->string('video')->nullable();
            $table->string('alt_tag')->nullable();
            $table->string('counter1')->nullable();
            $table->string('countertitle1')->nullable();
           $table->string('counter2')->nullable();
            $table->string('countertitle2')->nullable();
            $table->string('counter3')->nullable();
            $table->string('countertitle3')->nullable();
            $table->string('counter4')->nullable();
            $table->string('countertitle4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whoweares');
    }
};
