<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Personnel_number');
            $table->string('Claim_number');
            $table->string('Employee_name');
            $table->string('Designition');
            $table->string('Basic_pay');
            $table->string('Place_of_Duty');
            $table->string('Patient_name');
            $table->string('Relationship_with_Employee');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
