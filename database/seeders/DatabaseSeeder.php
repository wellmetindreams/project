<?php

namespace Database\Seeders;
use App\Models\KnifeType;
use DB;
use App\Models\Country;
use App\Models\Knife;
use App\Models\KnifeImage;
use App\Models\MaterialType;
use App\Models\User;
use App\Models\Collection;
use App\Models\Maker;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\MakerFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('TRUNCATE TABLE countries RESTART IDENTITY CASCADE');
        DB::statement('TRUNCATE TABLE material_types RESTART IDENTITY CASCADE');
        DB::statement('TRUNCATE TABLE collection RESTART IDENTITY CASCADE');
        DB::statement('TRUNCATE TABLE makers RESTART IDENTITY CASCADE'); // если есть такая таблица
        DB::statement('TRUNCATE TABLE users RESTART IDENTITY CASCADE');
        DB::statement('TRUNCATE TABLE knife RESTART IDENTITY CASCADE');
        DB::statement('TRUNCATE TABLE knife_images RESTART IDENTITY CASCADE');


        KnifeType::factory()->count(9)->sequence(
             ['name' => 'Chef Knife'],
            ['name' => 'Paring Knife'],
            ['name' => 'Bread Knife'],
            ['name' => 'Santoku'],
            ['name' => 'Carving Knife'],
            ['name' => 'Utility Knife'],
            ['name' => 'Boning Knife'],
            ['name' => 'Cleaver'],
            ['name' => 'Fillet Knife']
        )->create();

        Country::factory()->count(14)->sequence(
            ['name' => 'United Kingdom', 'code' => 'GBR'],
            ['name' => 'Germany', 'code' => 'DEU'],
            ['name' => 'France', 'code' => 'FRA'],
            ['name' => 'Japan', 'code' => 'JPN'],
            ['name' => 'China', 'code' => 'CHN'],
            ['name' => 'Canada', 'code' => 'CAN'],
            ['name' => 'Australia', 'code' => 'AUS'],
            ['name' => 'Brazil', 'code' => 'BRA'],
            ['name' => 'India', 'code' => 'IND'],
            ['name' => 'Mexico', 'code' => 'MEX'],
            ['name' => 'Russia', 'code' => 'RUS'],
            ['name' => 'Italy', 'code' => 'ITA'],
            ['name' => 'Spain', 'code' => 'ESP'],
            ['name' => 'South Korea', 'code' => 'KOR'],
        )->create();

        MaterialType::factory()->count(15)->sequence(
            ['name' => 'CPM-S35VN'],
            ['name' => 'D2'],
            ['name' => 'M390'],
            ['name' => '154CM'],
            ['name' => '440'],
            ['name' => 'CPM-S30V'],
            ['name' => 'CPM-20CV'],
            ['name' => '1095'],
            ['name' => 'N690'],
            ['name' => 'Elmax'],
            ['name' => 'VG-10'],
            ['name' => 'AUS-8'],
            ['name' => 'Damascus Steel'],
            ['name' => 'Tool Steel O1'],
            ['name' => 'CPM-3V']
        )->create();


        $makers = [
            'Chris Reeve' => ['Sebenza Series', 'Inkosi Series'],
            'Benchmade' => ['Griptilian Series', 'Bugout Series'],
            'Spyderco' => ['Paramilitary Series', 'Delica Series'],
            'Zero Tolerance' => ['ZT 0900 Series', 'ZT 0450 Series'],
            'Buck Knives' => ['110 Folding Hunter', 'Vantage Series'],
            'Messermeister' => ['San Moritz Series', 'Paladin Series'],
            'Bark River' => ['Bravo Series', 'Northstar Series'],
            'ESEE Knives' => ['ESEE-5 Series', 'ESEE-6 Series'],
            'Cold Steel' => ['Recon Scout', 'SRK Series'],
            'Hogue Knives' => ['EX-A01 Series', 'EX-F01 Series'],
        ];

            foreach($makers as $maker => $collections){
                Maker::factory()
                ->state(['name' => $maker])
                ->has (
                    Collection::factory()
                    ->count(count($collections))
                    ->sequence(...array_map(fn($collection)=>['name'=>$collection], $collections))
                )
                ->create();
            }

        User::factory()->count(3)->create();

        Knife::factory()
            ->count(10)
            ->for(KnifeType::inRandomOrder()->first())
            ->for(Country::inRandomOrder()->first())
            ->for(MaterialType::inRandomOrder()->first(), 'material')
            ->for(Maker::inRandomOrder()->first(),'maker')
            ->for(Collection::inRandomOrder()->first(),'collection')
            ->has(
                KnifeImage::factory()
                ->count(5)
                ->sequence(fn(Sequence $sequence) => ['position' => $sequence->index % 5+ 1]),
                'images'
            )
        ->create();

    }

   
}
