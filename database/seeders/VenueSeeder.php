<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $venues = [
            [
                'name' => 'Bacarra National Comprehensive high school',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2504443',
                'gps_longitude' => '120.6112336',
            ],
            [
                'name' => 'Bacarra Special Education Center',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2518948',
                'gps_longitude' => '120.6114483',
            ],
            [
                'name' => 'Bacarra Central Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '15.8949214',
                'gps_longitude' => '120.2860671',
            ],
            [
                'name' => 'San Agustin Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2561172',
                'gps_longitude' => '120.6055146',
            ],
            [
                'name' => 'Cadaratan Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2909828',
                'gps_longitude' => '120.5981133',
            ],
            [
                'name' => 'Cadaratan National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2933045',
                'gps_longitude' => '120.5970845',
            ],
            [
                'name' => 'Santo Cristo Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2501082',
                'gps_longitude' => '120.6172413',
            ],
            [
                'name' => 'Ferdinand E. Marcos Senior High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.0527874',
                'gps_longitude' => '120.5639913',
            ],
            [
                'name' => 'Mariano Marcos Memorial Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.0527874',
                'gps_longitude' => '120.5639913',
            ],
            [
                'name' => 'City of Batac National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.0473039',
                'gps_longitude' => '120.5319271',
            ],
            [
                'name' => 'Catalino Acosta Memorial Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.0541927',
                'gps_longitude' => '120.5538789',
            ],
            [
                'name' => 'Dingras National High School Poblacion Campus',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1058359',
                'gps_longitude' => '120.6972975',
            ],
            [
                'name' => 'Dingras West Central Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1041337',
                'gps_longitude' => '120.6990346',
            ],
            [
                'name' => 'Dingras East Central Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.0949171',
                'gps_longitude' => '120.7035882',
            ],
            [
                'name' => 'Gabu National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1859302',
                'gps_longitude' => '120.5273438',
            ],
            [
                'name' => 'Gabu Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1880915',
                'gps_longitude' => '120.5252958',
            ],
            [
                'name' => 'Ilocos Norte National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2042331',
                'gps_longitude' => '120.5910977',
            ],
            [
                'name' => 'Ilocos Norte College Of Arts & Trades',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2036423',
                'gps_longitude' => '120.5836817',
            ],
            [
                'name' => 'Balatong Integrated School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.16494',
                'gps_longitude' => '120.5489421',
            ],
            [
                'name' => 'Shamrock Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.202868',
                'gps_longitude' => '120.5908295',
            ],
            [
                'name' => 'Buttong Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1864651',
                'gps_longitude' => '120.5798811',
            ],
            [
                'name' => 'Paoay Central Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.0610517',
                'gps_longitude' => '120.5207723',
            ],
            [
                'name' => 'Paoay National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.0518601',
                'gps_longitude' => '120.5161428',
            ],
            [
                'name' => 'Nagbacalan Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1142302',
                'gps_longitude' => '120.4878991',
            ],
            [
                'name' => 'Paoay Lake National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1150815',
                'gps_longitude' => '120.525335',
            ],
            [
                'name' => 'Ilocos Norte Agricultural College',
                'venue_type_id' => 1,
                'gps_latitude' => '18.325377',
                'gps_longitude' => '120.619644',
            ],
            [
                'name' => 'Gabaldon Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1966782',
                'gps_longitude' => '120.6028954',
            ],
            [
                'name' => 'Piddig National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1544726',
                'gps_longitude' => '120.6930106',
            ],
            [
                'name' => 'San Nicolas National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1696536',
                'gps_longitude' => '120.6098616',
            ],
            [
                'name' => 'Filipinas East Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1693921',
                'gps_longitude' => '120.6034535',
            ],
            [
                'name' => 'Bingao National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1371744',
                'gps_longitude' => '120.580697',
            ],
            [
                'name' => 'Bingao Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1358728',
                'gps_longitude' => '120.5802457',
            ],
            [
                'name' => 'San Nicolas Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1730493',
                'gps_longitude' => '120.5853501',
            ],
            [
                'name' => 'Sarrat National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1605237',
                'gps_longitude' => '120.6487454',
            ],
            [
                'name' => 'Sarrat North Central School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.0779058',
                'gps_longitude' => '120.5597249',
            ],
            [
                'name' => 'Santa Rosa National High School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.1605237',
                'gps_longitude' => '120.6106366',
            ],
            [
                'name' => 'Santa Rosa Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.124106',
                'gps_longitude' => '120.6257462',
            ],
            [
                'name' => 'F. Camaquin Elementary School',
                'venue_type_id' => 1,
                'gps_latitude' => '18.2271878',
                'gps_longitude' => '120.6429174',
            ],
        ];

        DB::table('venues')->insert($venues);
    }
}
