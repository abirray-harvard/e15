<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableVaccinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_vaccines', function (Blueprint $table) {
            # Create a Primary, Auto-Incrementing column named `id`
            $table->id();
            # This generates two columns: `created_at` and `updated_at` 
            # Laravel will manage these columns automatically
            $table->timestamps();

            $table->string('vaccine');
            $table->string('age_required');
            $table->string('type');
            $table->string('effectivity');
            $table->float('price', 5, 2);
            $table->smallInteger('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_vaccines');
    }
}
