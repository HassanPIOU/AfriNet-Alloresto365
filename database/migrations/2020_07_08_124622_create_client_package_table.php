<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_package', function (Blueprint $table) {
            $table->id();
            $table->enum('state', ['expired', 'progressing'])->default('progressing');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('package_id');
            $table->timestamps();


            $table->foreign('customer_id')->on('customers')->references('id')->onDelete('cascade');
            $table->foreign('package_id')->on('packages')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_package');
    }
}
