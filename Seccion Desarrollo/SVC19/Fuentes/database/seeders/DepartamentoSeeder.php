<?php

namespace Database\Seeders;
use App\Models\Departamento;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamento01 = new Departamento();
        $departamento01->name = "Amazonas";
        $departamento01->save();

        $departamento02 = new Departamento();
        $departamento02->name = "Ancash";
        $departamento02->save();

        $departamento03 = new Departamento();
        $departamento03->name = "Apurimac";
        $departamento03->save();

        $departamento04 = new Departamento();
        $departamento04->name = "Arequipa";
        $departamento04->save();

        $departamento05 = new Departamento();
        $departamento05->name = "Ayacucho";
        $departamento05->save();

        $departamento06 = new Departamento();
        $departamento06->name = "Cajamarca";
        $departamento06->save();

        $departamento07 = new Departamento();
        $departamento07->name = "Callao";
        $departamento07->save();

        $departamento08 = new Departamento();
        $departamento08->name = "Cusco";
        $departamento08->save();

        $departamento09 = new Departamento();
        $departamento09->name = "Huancavelica";
        $departamento09->save();

        $departamento10 = new Departamento();
        $departamento10->name = "Huanuco";
        $departamento10->save();

        $departamento11 = new Departamento();
        $departamento11->name = "Ica";
        $departamento11->save();

        $departamento12 = new Departamento();
        $departamento12->name = "Junin";
        $departamento12->save();

        $departamento13 = new Departamento();
        $departamento13->name = "La Libertad";
        $departamento13->save();

        $departamento14 = new Departamento();
        $departamento14->name = "Lambayeque";
        $departamento14->save();

        $departamento15 = new Departamento();
        $departamento15->name = "Lima";
        $departamento15->save();

        $departamento16 = new Departamento();
        $departamento16->name = "Loreto";
        $departamento16->save();

        $departamento17 = new Departamento();
        $departamento17->name = "Madre de Dios";
        $departamento17->save();

        $departamento18 = new Departamento();
        $departamento18->name = "Moquegua";
        $departamento18->save();

        $departamento19 = new Departamento();
        $departamento19->name = "Pasco";
        $departamento19->save();

        $departamento20 = new Departamento();
        $departamento20->name = "Piura";
        $departamento20->save();

        $departamento21 = new Departamento();
        $departamento21->name = "Puno";
        $departamento21->save();

        $departamento22 = new Departamento();
        $departamento22->name = "San Martin";
        $departamento22->save();

        $departamento23 = new Departamento();
        $departamento23->name = "Tacna";
        $departamento23->save();

        $departamento24 = new Departamento();
        $departamento24->name = "Tumbes";
        $departamento24->save();

        $departamento25 = new Departamento();
        $departamento25->name = "Ucayali";
        $departamento25->save();
    }
}

