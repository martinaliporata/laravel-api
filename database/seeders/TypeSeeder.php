<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $typesName=[
            "Backend",
            "Frontend",
            "Back office",
            "Front office",
        ];
        foreach($typesName as $typeName){
            $type = new Type();
            $type->name = $typeName;
            $type->colour= $faker->unique()->safeHexColor();
            $type->save();
        }
    }
}
