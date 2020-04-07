<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_book', function (Blueprint $table) {
            $table->foreignId('book_id')
                    ->constrained() // crée la colonne book_id et la contrainte
                    ->onDelete('cascade'); // Supprime automatiquement les références des livres dans la table liaison si on supprime un livre dans la table books
            /* Ancienne méthode 
                $table->unsignedBigInteger('book_id');
                $table->foreign('book_id')->references('id')->on('books');
            */

            $table->foreignId('author_id')
            ->constrained() // crée la colonne author_id et la contrainte
            ->onDelete('cascade'); // Supprime automatiquement les références des livres dans la table liaison si on supprime un livre dans la table authors
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_book');
    }
}
