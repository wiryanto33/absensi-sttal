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
        Schema::table('prajurits', function (Blueprint $table) {
            //position
            $table->string('position')->nullable();
            //jabatan
            $table->string('jabatan')->nullable();
            //departemen
            $table->string('departement')->nullable();
            //phone
            $table->string('phone')->nullable();
            //face_embedding
            $table->string('face_embedding')->nullable();
            //image_url
            $table->string('image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prajurits', function (Blueprint $table) {
            //
            $table->dropColumn('position');
            $table->dropColumn('jabatan');
            $table->dropColumn('departement');
            $table->dropColumn('phone');
            $table->dropColumn('face_embedding');
            $table->dropColumn('image_url');
        });
    }
};
