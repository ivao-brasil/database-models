<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademyManualsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academy_manuals_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manual_id')
                ->constrained('academy_manuals', 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('tag_id')
                ->constrained('academy_tags', 'id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academy_manuals_tags');
    }
}
