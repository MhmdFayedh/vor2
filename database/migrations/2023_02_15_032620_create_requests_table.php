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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['صحية','تقنية','أجتماعية','أدارية']); 
            $table->unsignedBigInteger('duration');
            $table->string('external_side')->nullable();
            $table->string('area')->nullable();
            $table->string('profession');

            //! Facility Table [Should be on another table]
            $table->string('facility_name');
            $table->string('department');
            //! End

            //! Status Table [Should be on another table]
            $table->text('reason')->nullable();
            $table->enum('status', ['accepted', 'rejected', 'pending'])->default('pending');
            //! End

            //! Schedules Table [Should be on another table]
            $table->date('start_date');
            $table->date('finished_date');
            $table->time('start_time');
            $table->time('finished_time');
            $table->unsignedInteger('volunteers_number');
            //! End
            

            
            $table->text('explained');
            $table->text('volunteers_role');
            $table->foreignId('user_id')
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->enum('classification', ['opportunity', 'initiative']);
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
        Schema::dropIfExists('requests');
    }
};
