<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('ticker', 10);
            $table->decimal('high', 10, 2);
            $table->decimal('low', 10, 2);
            $table->decimal('open', 10, 2);
            $table->decimal('close', 10, 2);
            $table->integer('volume');
            $table->decimal('change', 10, 2);
            $table->decimal('changepct', 4, 2);
            $table->timestamps();

            $table->index('ticker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
