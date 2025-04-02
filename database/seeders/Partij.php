<?php

namespace Database\Seeders;

use App\Models\Partij as PartijModel;
use Illuminate\Database\Seeder;

class Partij extends Seeder
{
    public function run(): void
    {
        PartijModel::create(['naam' => 'VVD', 'beschrijving' => 'Liberale partij', 'logo' => 'vvd.png']);
        PartijModel::create(['naam' => 'PVDAG', 'beschrijving' => 'Sociaal-democratische partij', 'logo' => 'pvda.png']);
        PartijModel::create(['naam' => 'GroenLinks', 'beschrijving' => 'Groen-progressieve partij', 'logo' => 'gl.svg']);
        PartijModel::create(['naam' => 'D66', 'beschrijving' => 'Sociaal-liberale partij', 'logo' => 'd66.png']);
        PartijModel::create(['naam' => 'FVD', 'beschrijving' => 'Conservatief-nationalistische partij', 'logo' => 'fvd.png']);
        PartijModel::create(['naam' => 'SP', 'beschrijving' => 'Socialistische partij', 'logo' => 'sp.png']);
        PartijModel::create(['naam' => 'ChristenUnie', 'beschrijving' => 'Christelijk-sociale partij', 'logo' => 'cu.png']);
        PartijModel::create(['naam' => 'SGP', 'beschrijving' => 'Conservatief-christelijke partij', 'logo' => 'sgp.png']);
        PartijModel::create(['naam' => 'Piratenpartij', 'beschrijving' => 'Digitale vrijheid en privacy', 'logo' => 'piraten.png']);
        PartijModel::create(['naam' => 'PVV', 'beschrijving' => 'Digitale vrijheid en privacy', 'logo' => 'piratenpartij.png']);
    }
}
