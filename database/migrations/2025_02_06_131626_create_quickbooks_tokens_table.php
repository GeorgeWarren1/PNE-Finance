<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('quickbooks_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('realm_id')->unique();
            $table->text('access_token');
            $table->text('refresh_token');
            $table->timestamp('expires_at'); // Token expiration time
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quickbooks_tokens');
    }
};
