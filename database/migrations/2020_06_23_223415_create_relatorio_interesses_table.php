<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelatorioInteressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorio_geral', function (Blueprint $table) {
            $table->id();
            $table->integer('qtd_usuarios');
            $table->integer('qtd_interesses');
            $table->integer('qtd_mensagens');
            $table->timestamps();
        });
        DB::connection()->getPdo()->exec('INSERT INTO relatorio_geral(qtd_usuarios, qtd_interesses, qtd_mensagens) VALUES(0, 0, 0);');

        DB::connection()->getPdo()->exec('
            CREATE PROCEDURE p_incrementa_relatorio_usuarios()
            BEGIN
                DECLARE qtd_atual INT DEFAULT 0;
                SET qtd_atual = (SELECT count(*) from users);
                UPDATE relatorio_geral SET qtd_usuarios = (qtd_atual);
            END;

        ');
        DB::connection()->getPdo()->exec('
            CREATE PROCEDURE p_incrementa_relatorio_interesses()
            BEGIN
                DECLARE qtd_atual INT DEFAULT 0;
                SET qtd_atual = (SELECT count(*) from interesses);
                UPDATE relatorio_geral SET qtd_interesses = (qtd_atual);
            END;

        ');
        DB::connection()->getPdo()->exec('
            CREATE PROCEDURE p_incrementa_relatorio_mensagens()
            BEGIN
                DECLARE qtd_atual INT DEFAULT 0;
                SET qtd_atual = (SELECT count(*) from mensagens);
                UPDATE relatorio_geral SET qtd_mensagens = (qtd_atual);
            END;

        ');
        DB::connection()->getPdo()->exec('
        CREATE TRIGGER `TG_AFTINS_RELATORIO_USERS` AFTER INSERT ON users
                 FOR EACH ROW BEGIN
                    CALL p_incrementa_relatorio_usuarios;
                 END;
        ');
        DB::connection()->getPdo()->exec('
        CREATE TRIGGER `TG_AFTINS_RELATORIO_INTERESSES` AFTER INSERT ON interesses
                 FOR EACH ROW BEGIN
                      CALL p_incrementa_relatorio_interesses;
                 END;
        ');
        DB::connection()->getPdo()->exec('
        CREATE TRIGGER `TG_AFTINS_RELATORIO_MENSAGENS` AFTER INSERT ON mensagens
                 FOR EACH ROW BEGIN
                   CALL p_incrementa_relatorio_mensagens;
                 END;
        ');

        DB::connection()->getPdo()->exec('
        CREATE TRIGGER `TG_AFTDEL_RELATORIO_USERS` AFTER DELETE ON users
                 FOR EACH ROW BEGIN
                    CALL p_incrementa_relatorio_usuarios;
                 END;
        ');
        DB::connection()->getPdo()->exec('
        CREATE TRIGGER `TG_AFTDEL_RELATORIO_INTERESSES` AFTER DELETE ON interesses
                 FOR EACH ROW BEGIN
                      CALL p_incrementa_relatorio_interesses;
                 END;
        ');
        DB::connection()->getPdo()->exec('
        CREATE TRIGGER `TG_AFTDEL_RELATORIO_MENSAGENS` AFTER DELETE ON mensagens
                 FOR EACH ROW BEGIN
                   CALL p_incrementa_relatorio_mensagens;
                 END;
        ');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relatorio_geral');
    }
}
