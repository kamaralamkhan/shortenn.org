<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('code', 30)->unique();
            $table->text('url');
            $table->integer('clicks')->default(0);
            $table->timestamp('expires_at')->nullable();
            $table->integer('max_clicks')->nullable();
            $table->boolean('is_active')->default(true);
            $table->text('note')->nullable();
            $table->timestamps();
            
            $table->index('code');
            $table->index('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};
