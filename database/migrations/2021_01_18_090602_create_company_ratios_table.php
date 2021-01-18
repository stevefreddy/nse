<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRatiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_ratios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->string('market_cap', 191);
            $table->decimal('current_market_price', 16, 2);
            $table->decimal('stock_pe', 10,2);
            $table->string('dividend_yield', 191);
            $table->decimal('roce', 16,2);
            $table->decimal('roe', 16,2);
            $table->decimal('debt_to_equity', 16,2);
            $table->decimal('eps', 10,2);
            $table->decimal('reserves', 16,2);
            $table->decimal('debt', 16,2);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign("company_id")->references("id")->on("companies")->onDelete("CASCADE")->onUpdate("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_ratios');
    }
}
