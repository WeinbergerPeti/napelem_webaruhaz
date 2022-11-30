<?php

use App\Models\Cim;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cim', function (Blueprint $table) {
            $table->id('cím_id');
            // $table->integer('irányítószám', 4)->unsigned();
            $table->integer('irányítószám')->length(2);
            $table->string("város", 30);
            $table->string("közterület neve", 50);
            $table->string("közterület jellege", 30);
            $table->string("házszám", 4);
            $table->integer("épület")->length(4)->nullable();
            $table->integer("emelet")->nullable()->length(2);
            $table->integer("ajtó")->nullable()->length(3);
            $table->integer("kapucsengő")->nullable()->length(3);
            $table->timestamps();;
        });
        // Cim::create(["irányítószám"=>1118, "város" => "Budapest", "közterület neve" => "Ménesi", "közterület jellege" => "út", "házszám" =>"77"]);
        Cim::create(["irányítószám"=>1041, "város" => "Budapest", "közterület neve" => "Lőrinc", "közterület jellege" => "utca", "házszám" =>"10"]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cim');
    }
};