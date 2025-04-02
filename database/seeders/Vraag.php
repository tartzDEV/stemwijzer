<?php

namespace Database\Seeders;

use App\Models\Vraag as VraagModel;
use Illuminate\Database\Seeder;

class Vraag extends Seeder
{
    public function run(): void
    {
        VraagModel::create(['thema_id' => 1, 'vraag' => 'Moet de overheid meer investeren in groene energie?']);
        VraagModel::create(['thema_id' => 2, 'vraag' => 'Moet de belasting op bedrijven verhoogd worden?']);
        VraagModel::create(['thema_id' => 2, 'vraag' => 'Moet er een kilometerheffing voor voertuigen komen?']);
        VraagModel::create(['thema_id' => 3, 'vraag' => 'Moet de EU meer bevoegdheden krijgen?']);
        VraagModel::create(['thema_id' => 3, 'vraag' => 'Moet Nederland meer vluchtelingen opvangen?']);
        VraagModel::create(['thema_id' => 2, 'vraag' => 'Moet de minimumlonen omhoog?']);
        VraagModel::create(['thema_id' => 4, 'vraag' => 'Moet de zorg meer worden gefinancierd door de staat?']);
        VraagModel::create(['thema_id' => 5, 'vraag' => 'Moet er meer geïnvesteerd worden in defensie?']);
        VraagModel::create(['thema_id' => 1, 'vraag' => 'Moet er meer aandacht komen voor sociale woningbouw?']);
        VraagModel::create(['thema_id' => 4, 'vraag' => 'Moet de AOW-leeftijd worden verhoogd?']);
        VraagModel::create(['thema_id' => 2, 'vraag' => 'Moet de belasting op hoge inkomens verhoogd worden?']);
        VraagModel::create(['thema_id' => 4, 'vraag' => 'Moet de staat actief bedrijven steunen in tijden van crisis?']);
        VraagModel::create(['thema_id' => 1, 'vraag' => 'Moet er strengere wetgeving komen voor de vleesindustrie?']);
        VraagModel::create(['thema_id' => 1, 'vraag' => 'Moet er een belasting komen op plastic gebruik?']);
        VraagModel::create(['thema_id' => 3, 'vraag' => 'Moet Nederland een republiek worden?']);
    }
}
