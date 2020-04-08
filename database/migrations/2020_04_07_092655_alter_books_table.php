<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ALTER TABLE books
        // on doit respecter les conventions de nommage

        Schema::table('books', function (Blueprint $table) {
            $table->foreignId('genre_id') // respecter le type de la clé primaire de la table genres
                ->nullable() // Un livre peut ne pas avoir de genre
                ->constrained() 
                ->onDelete('SET NULL'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
        
        Schema::table('books', function (Blueprint $table) {
           
            // On supprime la contrainte
            $table->dropForeign('books_genre_id_foreign');

            // Puis on supprime la colonne
            $table->dropColumn('genre_id');
        });
    }
}
