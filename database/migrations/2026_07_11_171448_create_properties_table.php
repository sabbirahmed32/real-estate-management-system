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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

                  $table->foreignId('agent_id')
                  ->constrained('agents')
                  ->cascadeOnDelete();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('property_type');
            $table->string('property_status');

            $table->decimal('price',12,2)->nullable();
            $table->decimal('security_deposit',12,2)->nullable();

            $table->date('available_from')->nullable();

            $table->integer('max_rooms')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();

            $table->integer('area')->nullable();

            $table->string('parking')->nullable();
            $table->string('garage')->nullable();

            $table->string('street_address')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();

            $table->longText('address')->nullable();

            $table->json('interior_features')->nullable();
            $table->json('amenities')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
