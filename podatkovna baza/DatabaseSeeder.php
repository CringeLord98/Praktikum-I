<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call('TableSeeder');

        $this->command->info('Tables seeded!');
    }

    
}

class TableSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategorija')->insert([
            'naziv' => ('Avtoličarstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Čiščenje')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Dimnikarstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Elektro inštalacije')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Fasaderstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Fotografija')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Frizerstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Gradbeništvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Kamnoseštvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Kovaštvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Kovinarstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Kozmetičarstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Optika')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Pogrebne storitve')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Prevozništvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Računovodstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Steklarstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Šoferstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Urarstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Vodovodarstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Vrtnarstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Vulkanizerstvo')
        ]);

        DB::table('kategorija')->insert([
            'naziv' => ('Tesarstvo')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Osrednjeslovenska')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Podravska')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Savinjska')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Pomurska')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Gorenjska')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Koroška')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Goriška')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Jugo-vzhodna Slovenija')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Primorsko-Notranjska')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Obalno-kraška')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Zasavska')
        ]);

        DB::table('regija')->insert([
            'regija' => ('Posavska')
        ]);
    }
}
