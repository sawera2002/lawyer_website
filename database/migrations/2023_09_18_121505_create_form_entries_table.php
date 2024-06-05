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
        Schema::create('form_entries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('date');
            $table->time('time');
            $table->text('message');
            $table->unsignedBigInteger('lawyer_id')->nullable(); // Add lawyer_id column
            $table->timestamps();

            // Create a foreign key constraint
            $table->foreign('lawyer_id')
                ->references('id')
                ->on('users')
                ->onDelete('set null'); // You can change the onDelete behavior as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_entries');
    }
};
