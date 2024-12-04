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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street', 50)->nullable()->default('street');
            $table->integer('internal_num')->unsigned()->nullable()->default(3);
            $table->integer('external_num')->unsigned()->nullable()->default(3);
            $table->string('neighborhood', 50)->nullable()->default('neighborhood');
            $table->string('town', 50)->nullable()->default('town');
            $table->string('state', 50)->nullable()->default('state');
            $table->string('country', 50)->nullable()->default('country');
            $table->integer('postal_code')->unsigned()->nullable()->default(6);
            $table->string('references', 50)->nullable()->default('references');
            $table->foreignId('client_id');
            $table->timestamps();
            
            $table->foreign('client_id')->references('id')->on('clients')
            ->onDelete('cascade') ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');
    }
};


