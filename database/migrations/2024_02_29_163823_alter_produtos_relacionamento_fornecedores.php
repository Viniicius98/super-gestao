<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Use Illuminate\Support\Facades\DB;

class AlterProdutosRelacionamentoFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos',function(Blueprint $table){
           

            $fornecedor_id = DB::table('fornecedores')->insertGetId([
                'nome'=>'Fornecedor SAO GONÇALO',
                'site'=>'fornecedorSG.com.br',
                'uf'=>'RJ',
                'email'=>'fornecedorSG@contato.com'
            ]);
            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedor',function(Blueprint $table){
            $table->dropForeign('produtos_fornecedor_id_foreign');
            $table->$table->dropColumn('fornecedor_id');
        });
       
    }
}
