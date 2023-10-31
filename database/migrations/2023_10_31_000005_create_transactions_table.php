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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Creates a foreign key 'user_id' column
            $table->decimal('amount', 10, 2); // Creates a decimal column for the transaction amount
            $table->string('currency'); // Creates a string column for the transaction description
            $table->enum('status' , ['success' , 'fail' , 'cancled']); // Creates a string column for the transaction description
            $table->string('description'); // Creates a string column for the transaction description
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
        Schema::dropIfExists('transactions');
    }
};
