<?php

namespace Database\Seeders;

use App\Models\Thema as ThemaModel;
use Illuminate\Database\Seeder;

class Thema extends Seeder
{
    public function run(): void
    {
        ThemaModel::create(['naam' => 'Klimaat', 'beschrijving' => 'Milieu en duurzaamheid']);
        ThemaModel::create(['naam' => 'Economie', 'beschrijving' => 'Werk, belasting en ondernemersklimaat']);
        ThemaModel::create(['naam' => 'Immigratie', 'beschrijving' => 'Beleid rondom vluchtelingen en migranten']);
        ThemaModel::create(['naam' => 'Zorg', 'beschrijving' => 'Financiering en toegankelijkheid van de zorg']);
        ThemaModel::create(['naam' => 'Onderwijs', 'beschrijving' => 'Onderwijs en de toekomst van het schoolsysteem']);
    }
}
