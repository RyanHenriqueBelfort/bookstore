<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained();
            $table->foreignId('gender_id')->constrained();
            $table->foreignId('publisher_id')->constrained();
            $table->string('title');
            $table->integer('release_year')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books', function (Blueprint $table) {
            $table->dropForeign('author_id')->constrained()->onDelete('cascade');
            $table->dropForeign('gender_id')->constrained()->onDelete('cascade');
            $table->dropForeign('publisher_id')->constrained()->onDelete('cascade');
        });
    }
};
