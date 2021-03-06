<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePatientultrasounds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientultrasounds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('visit_id');
            $table->string('or_no');
            $table->integer('physician_id');
            $table->date('ultrasound_date');
            $table->enum('finding', array('Normal', 'Not Normal'))->default('Normal');
            $table->text('finding_info');
            $table->enum('status', array('New', 'Old'))->default('New');
            $table->decimal('phy_fee');
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
        Schema::dropIfExists('patientultrasounds');
    }
}
