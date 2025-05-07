<?php

namespace Database\Seeders;

use App\Models\BrevoListId;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrevoListIdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listIds = [5,7,8,4,6];   //These are stored in brevo
        $templateIds = [2, 2, 3,1,1]; // These are stored in brevo

        foreach ($listIds as $key => $listId) {
            BrevoListId::create([
                'list_id' => $listId,
                'template_id' => $templateIds[$key],
            ]);
        }
    }
}
