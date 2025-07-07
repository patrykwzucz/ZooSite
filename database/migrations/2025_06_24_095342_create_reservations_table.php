<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('ReservedName');
            $table->string('PhoneNumber', 12);
            $table->unsignedBigInteger('TicketType');
            $table->date('ReservationDate');
            $table->unsignedBiginteger('Count');
            $table->decimal('Sum');
            $table->unsignedBigInteger('UserId');
        });
        Schema::table('reservations', function (BluePrint $table) {
            $table->foreign('TicketType')->references('id')->on('tickets');
            $table->foreign('UserId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservations', function (BluePrint $table) {
            $table->dropForeign('reservation_ticket_type_foreign');
            $table->dropForeign('reservation_user_id_foreign');
        });
        Schema::dropIfExists('reservations');
    }
};
