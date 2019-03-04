<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    public function up()
    {
      Schema::create('leads', function (Blueprint $table) {
        $table->Increments('id');
        $table->string('name', 30);
        $table->string('email', 30);
        $table->text('message');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('leads');
    }
}
