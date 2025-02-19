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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('author_id');
            $table->string('publisher');
            $table->string('name');
            $table->float('regular_price');
            $table->float('selling_price');
            $table->integer('stock')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->integer('pages')->nullable();
            $table->string('isbn')->nullable();
            $table->text('image');
            $table->tinyInteger('feature_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
