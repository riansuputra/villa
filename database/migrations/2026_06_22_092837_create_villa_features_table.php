<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(
            'villa_features',
            function ($table) {

                $table->id();

                $table->string('title');

                $table->string('value');

                $table->string('image')
                    ->nullable();

                $table->integer('sort_order')
                    ->default(0);

                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villa_features');
    }
};
