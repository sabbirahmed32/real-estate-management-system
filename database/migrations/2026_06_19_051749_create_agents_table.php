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
        Schema::create('agents', function (Blueprint $table) {
             $table->id();

            $table->string('image')->nullable();

            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();

            $table->integer('properties_number')->default(0);

            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();

            $table->enum('property_status', ['For Sale', 'For Rent'])->nullable();

            $table->decimal('property_price', 12, 2)->nullable();

            $table->integer('max_rooms')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();

            $table->string('street_address')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();

            $table->longText('address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
