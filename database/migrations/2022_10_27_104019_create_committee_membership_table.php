<?php

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
        Schema::create('committee_membership', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->nullable()->constrained();
            $table->foreignId('committee_id')->nullable()->constrained();
            $table->foreignId('commission_charge_id')->nullable()->constrained()->references('id')->on('commission_charges');
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
        Schema::dropIfExists('committee_membership');
    }
};
