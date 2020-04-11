<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('ticker', 10);
            $table->string('year');
            $table->bigInteger('cash_and_cash_equivalents')->nullable();
            $table->bigInteger('short_term_investments')->nullable();
            $table->bigInteger('cash_and_short_term_investments')->nullable();
            $table->bigInteger('receivables')->nullable();
            $table->bigInteger('inventories')->nullable();
            $table->bigInteger('total_current_assets')->nullable();
            $table->bigInteger('property_plant_equipment_net')->nullable();
            $table->bigInteger('goodwill_and_intangible_assets')->nullable();
            $table->bigInteger('long_term_investments')->nullable();
            $table->bigInteger('tax_assets')->nullable();
            $table->bigInteger('total_non_current_assets')->nullable();
            $table->bigInteger('total_assets')->nullable();
            $table->bigInteger('payables')->nullable();
            $table->bigInteger('short_term_debt')->nullable();
            $table->bigInteger('total_current_liabilities')->nullable();
            $table->bigInteger('long_term_debt')->nullable();
            $table->bigInteger('total_debt')->nullable();
            $table->bigInteger('deferred_revenue')->nullable();
            $table->bigInteger('tax_liabilities')->nullable();
            $table->bigInteger('deposit_liabilities')->nullable();
            $table->bigInteger('total_non_current_liabilities')->nullable();
            $table->bigInteger('total_liabilities')->nullable();
            $table->bigInteger('other_comprehensive_income')->nullable();
            $table->bigInteger('retained_earnings_deficit')->nullable();
            $table->bigInteger('total_shareholders_equity')->nullable();
            $table->bigInteger('investments')->nullable();
            $table->bigInteger('net_debt')->nullable();
            $table->bigInteger('other_assets')->nullable();
            $table->bigInteger('other_liabilities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balance_sheets');
    }
}
