<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');       //default constrained() means references 'id' on 'users' table. To customize table name type constrained('table_name'). onDelete('cascade') means if we delete a user then we want to delete that user's orders too.
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('address');
            $table->string('status');
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
        Schema::dropIfExists('orders');
    }
}
