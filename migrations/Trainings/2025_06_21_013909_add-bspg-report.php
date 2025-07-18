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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('isBSPGMember')->default(false)->after('staff');
        });

        Schema::table('reports', function (Blueprint $table) {
            $table->boolean('isBSPGReport')->default(false)->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('isBSPGMember').after('owner_vid');
        });

        Schema::table('reports', function (Blueprint $table) {
            $table->dropColumn('isBSPGReport');
        });
    }
};
