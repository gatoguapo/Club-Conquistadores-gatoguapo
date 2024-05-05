<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        DB::statement("
            CREATE VIEW vw_conquistador AS
            SELECT c.id as id, u.name as nombre, u.apellido as apellidos, u.email as email, u.password as contraseña, u.telefono as telefono, u.fecha_nacimiento as fecha_nacimiento, u.calle as calle, u.numero_exterior as numero_exterior, u.numero_interior as numero_interior, u.colonia as colonia, ci.nombre as ciudad, m.nombre as municipio, e.nombre as estado, p.nombre as pais, p.locale as locale, t.name as tutor_nombre, c.user_id as uid, c.tutorLegal_id as tutorid, c.rol as rol, c.activo as activo
            from conquistador c
            INNER JOIN users u on u.id = c.id
            INNER JOIN ciudad ci on ci.id = u.ciudad_id
            INNER JOIN municipios m on m.id = ci.municipio_id
            INNER JOIN estados e on e.id = m.estado_id
            INNER JOIN pais p on p.id = e.pais_id
            INNER JOIN users t on t.id = c.tutorLegal_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS vw_conquistador");
    }
};
