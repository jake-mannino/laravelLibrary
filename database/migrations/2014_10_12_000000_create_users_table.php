<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('excerpt');
            $table->char('isbn', 13);
            $table->integer('pages');
            $table->double('cost');
            $table->double('value');
            $table->datetime('released');
            $table->integer('status');
            $table->integer('current_condition');
            $table->timestamps();
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
        Schema::dropIfExists('users');
      //how tables get deleted
    }
}
