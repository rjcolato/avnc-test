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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(\App\Models\Branches::class);
            $table->string('employee_code', 100);
            $table->string('first_name', 300);
            $table->string('last_name', 300);
            $table->date('birthdate');
            $table->string('email', 300);
            $table->foreignId('country_id');
            $table->string('city', 100);
            $table->string('address', 300);
            $table->string('phone', 50);
            $table->date('hiring_date');
            $table->boolean('status');
            $table->foreignIdFor(\App\Models\Genre::class);
            $table->foreignIdFor(\App\Models\Turns::class);

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
};
