<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punishments', function (Blueprint $table) {
            $table->id();
            $table->string('method_label');
            $table->int('amount_of_pain');
            $table->int('psychological_factor');
            $table->boolean('shreck');
            $table->string('danny_devito_coefficient');
            $table->timestamp('punishment_start');
            $table->boolean('forever');
            $table->timestamp('punishment_end')
        });
    }
  //this is actually code for create books table, not creat users table
  //tables is plural
  //book model, book is singular
//how tables get created
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punishments');
      //how tables get deleted
    }
}
