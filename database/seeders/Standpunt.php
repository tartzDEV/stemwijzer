<?php

namespace Database\Seeders;

use App\Models\Standpunt as StandpuntModel;
use Illuminate\Database\Seeder;

class Standpunt extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // VVD (liberaal)
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 1, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 2, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 3, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 4, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 5, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 6, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 7, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 8, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 9, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 10, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 11, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 12, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 13, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 14, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 1, 'vraag_id' => 15, 'positie' => 'contra']);

        // PVDAG (sociaal-democratisch)
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 1, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 2, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 3, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 4, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 5, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 6, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 7, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 8, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 10, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 11, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 12, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 13, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 14, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 2, 'vraag_id' => 15, 'positie' => 'pro']);

        // GroenLinks (groen-progressief)
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 1, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 2, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 3, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 4, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 5, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 6, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 7, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 8, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 10, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 11, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 12, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 13, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 14, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 3, 'vraag_id' => 15, 'positie' => 'pro']);

        // D66 (sociaal-liberaal)
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 1, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 2, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 3, 'positie' => 'neutraal']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 4, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 5, 'positie' => 'neutraal']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 6, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 7, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 8, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 10, 'positie' => 'neutraal']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 11, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 12, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 13, 'positie' => 'neutraal']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 14, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 4, 'vraag_id' => 15, 'positie' => 'neutraal']);

        // FVD (conservatief-nationalistisch)
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 1, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 2, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 3, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 4, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 5, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 6, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 7, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 8, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 10, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 11, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 12, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 13, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 14, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 5, 'vraag_id' => 15, 'positie' => 'pro']);

        // SP (socialistisch)
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 1, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 2, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 3, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 4, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 5, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 6, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 7, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 8, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 10, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 11, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 12, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 13, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 14, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 6, 'vraag_id' => 15, 'positie' => 'pro']);

        // ChristenUnie (christelijk-sociale waarden)
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 1, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 2, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 3, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 4, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 5, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 6, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 7, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 8, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 10, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 11, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 12, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 13, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 14, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 7, 'vraag_id' => 15, 'positie' => 'pro']);

        // SGP (orthodox-christelijk)
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 1, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 2, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 3, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 4, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 5, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 6, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 7, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 8, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 10, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 11, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 12, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 13, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 14, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 8, 'vraag_id' => 15, 'positie' => 'pro']);

        // Piratenpartij (digitale vrijheid en privacy)
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 1, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 2, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 3, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 4, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 5, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 6, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 7, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 8, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 10, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 11, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 12, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 13, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 14, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 9, 'vraag_id' => 15, 'positie' => 'pro']);

        // PVV (rechts-populistisch)
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 1, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 2, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 3, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 4, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 5, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 6, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 7, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 8, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 9, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 10, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 11, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 12, 'positie' => 'pro']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 13, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 14, 'positie' => 'contra']);
        StandpuntModel::create(['partij_id' => 10, 'vraag_id' => 15, 'positie' => 'pro']);
    }
}
