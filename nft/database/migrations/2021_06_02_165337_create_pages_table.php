<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 100)->unique()->index();
            $table->boolean('is_active');
            $table->boolean('is_index');
            $table->string('template', 10);
            $table->json('data');
            $table->timestamps();
        });

        Schema::create('page_metas', function(Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->index()->references('id')->on('pages')->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
        });
    }
}
