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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('password');
            $table->longText('address');
            $table->timestamps();
        });
        // steps
        //(1) php artisan make:model Student 
        //Edit the data in the migration,add columns in the created table 
        //This command will create a model class and a migration table 
        //(2)php artisan migrate
        //==>This command allows you to migrate your table data from your migration file to your mysql database
       //+++++++++++++++++
        //-->Error encounterd
          //could not find driver
        //-->solution to erroo--> sudo apt install php8.1-mysql

      

        //++++++++++++++++++

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
