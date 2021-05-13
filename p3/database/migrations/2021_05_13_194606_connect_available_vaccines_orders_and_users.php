<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectAvailableVaccinesOrdersAndUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {

            # Remove the field associated with the old way we were storing authors
            # Can do this here, or update the original migration that creates the `books` table
            # $table->dropColumn('author');
    
            # Add a new bigint field called `author_id` 
            # has to be unsigned (i.e. positive)
            # nullable so it's possible to have a book without an author
           // $table->bigInteger('user_id')->unsigned()->nullable();
    
            # This field `author_id` is a foreign key that connects to the `id` field in the `authors` table
            $table->foreign('user_id')->references('id')->on('users');

            //$table->bigInteger('vaccine_id')->unsigned()->nullable();
            $table->foreign('vaccine_id')->references('id')->on('available_vaccines');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
