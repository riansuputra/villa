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
        Schema::table(
            'settings',
            function ($table) {

                $table->string('instagram')
                    ->nullable();

                $table->string('facebook')
                    ->nullable();

                $table->string('tiktok')
                    ->nullable();

                $table->string('youtube')
                    ->nullable();

                $table->text('copyright')
                    ->nullable();

                $table->text('privacy_policy')
                    ->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
