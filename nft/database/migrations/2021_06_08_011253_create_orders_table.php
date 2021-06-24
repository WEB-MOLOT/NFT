<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->foreignId('listing_id')->references('id')->on('listings')->cascadeOnDelete();
            $table->text('message');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->unsignedInteger('ip');
            $table->timestamp('executed_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }
}
