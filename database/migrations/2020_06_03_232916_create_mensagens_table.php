<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('mensagens', function (Blueprint $table) {
        //     $table->id();
        //     $table->text('mensagem');
        //     $table->foreignId('user_id')->references('id')->on('users');
        //     $table->foreignId('chat_id')->references('id')->on('chats');
        //     $table->timestamps();
        //     $table->engine = 'MyISAM';
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensagens');
    }
}
