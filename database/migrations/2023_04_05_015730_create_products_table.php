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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150); // varchar(150)
            $table->string('unit', 10)->nullable();
            $table->decimal('unitPrice', 8, 2); //decimal(8,2)
            $table->string('category', 50);
            $table->text('description')->nullable();
            $table->text('image_url')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); //foreign key to user table, the onwner of this product
            $table->timestamps(); //createAt, updateAT
            /* CREATE TABLE COMMANDS IN MYSQL */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
