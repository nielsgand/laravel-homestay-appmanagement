<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER id_store BEFORE INSERT ON bookings FOR EACH ROW
            BEGIN
                INSERT INTO seqence_tbls VALUES (NULL);
                SET NEW.booking_id = CONCAT("BKG-",LPAD(LAST_INSERT_ID(), 4, "0"));
            END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER "id_store"');
    }
};
