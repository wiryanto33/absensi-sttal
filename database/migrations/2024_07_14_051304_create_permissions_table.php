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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            //prajurit_id (foreign key that refers to id coloumn on prajurits table)
            $table->foreignId('prajurit_id')->constrained('prajurits')->onDelete('cascade');
            //date_permission is a date column
            $table->date('date_permission');
            //reason
            $table->string('reason');
            //image nullable
            $table->string('image')->nullable();
            //is_approved is boolean column
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
