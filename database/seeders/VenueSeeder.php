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
            [
                'name' => 'Busan',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2519694',
                'gps_longitude' => '120.6045351',
            ],
            [
                'name' => 'Laoag City Fiesta Ground (Gilbert Bridge)',
                'venue_type_id' => 2,
                'gps_latitude' => '18.192694',
                'gps_longitude' => '120.593087',
            ],
            [
                'name' => 'Divine World College of Laoag Covered Court',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2005989',
                'gps_longitude' => '120.5933479',
            ],
            [
                'name' => 'Ferdinand E. Marcos Memorial Stadium Track and Field',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2081048',
                'gps_longitude' => '120.587888',
            ],
            [
                'name' => 'David’s Sports & Fitness Center',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2135733',
                'gps_longitude' => '120.6019642',
            ],
            [
                'name' => 'Bacarra National Comprehensive High School Grounds',
                'venue_type_id' => 2,
                'gps_latitude' => '18.250297',
                'gps_longitude' => '120.6105297',
            ],
            [
                'name' => 'Dingras Civic Center',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1037938',
                'gps_longitude' => '120.6950065',
            ],
            [
                'name' => 'Ilocos Norte Centennial Arena',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2056956',
                'gps_longitude' => '120.5893332',
            ],
            [
                'name' => 'INSPIRE Training Center Basketball Court',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2064417',
                'gps_longitude' => '120.5921889',
            ],
            [
                'name' => 'Laoag City Amphitheater',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1948204',
                'gps_longitude' => '120.5911615',
            ],
            [
                'name' => 'Pasuquin Civic Center',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1948204',
                'gps_longitude' => '120.5911615',
            ],
            [
                'name' => 'SM Mall Activity Area 2',
                'venue_type_id' => 2,
                'gps_latitude' => '18.190209',
                'gps_longitude' => '120.5780111',
            ],
            [
                'name' => 'Imelda Cultural Center',
                'venue_type_id' => 2,
                'gps_latitude' => '18.0551432',
                'gps_longitude' => '120.5621207',
            ],
            [
                'name' => 'Ilocos Norte Provincial Capitol New Auditorium',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1963788',
                'gps_longitude' => '120.5930047',
            ],
            [
                'name' => 'SM Mall Activity Area 1',
                'venue_type_id' => 2,
                'gps_latitude' => '18.190209',
                'gps_longitude' => '120.5780111',
            ],
            [
                'name' => 'Mariano Marcos State University Batac Football Field',
                'venue_type_id' => 2,
                'gps_latitude' => '18.0584736',
                'gps_longitude' => '120.5533226',
            ],
            [
                'name' => 'Northwestern University Football Field',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1866656',
                'gps_longitude' => '120.5661407',
            ],
            [
                'name' => 'FEMMS Football Field',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2081048',
                'gps_longitude' => '120.587888',
            ],
            [
                'name' => 'Vintar Sports Complex',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2224595',
                'gps_longitude' => '120.6707073',
            ],
            [
                'name' => "St. Mary's Seminary Covered Court",
                'venue_type_id' => 2,
                'gps_latitude' => '18.1744082',
                'gps_longitude' => '120.5583813',
            ],
            [
                'name' => "INNHS Gymnasium",
                'venue_type_id' => 2,
                'gps_latitude' => '18.1744082',
                'gps_longitude' => '120.5583813',
            ],
            [
                'name' => "INNHS Gymnasium",
                'venue_type_id' => 2,
                'gps_latitude' => '18.2043942',
                'gps_longitude' => '120.591129',
            ],
            [
                'name' => "Robinson's Mall Activity Area Building B",
                'venue_type_id' => 2,
                'gps_latitude' => '18.1796625',
                'gps_longitude' => '120.5920653',
            ],
            [
                'name' => 'Vintar Civic Center',
                'venue_type_id' => 2,
                'gps_latitude' => '18.229815',
                'gps_longitude' => '120.6482502',
            ],
            [
                'name' => 'MMSU Batac Covered Court',
                'venue_type_id' => 2,
                'gps_latitude' => '18.057296',
                'gps_longitude' => '120.5540491',
            ],
            [
                'name' => 'INAC Open Ground',
                'venue_type_id' => 2,
                'gps_latitude' => '18.325377',
                'gps_longitude' => '120.6170691',
            ],
            [
                'name' => 'Pasuquin Municipal Ground',
                'venue_type_id' => 2,
                'gps_latitude' => '18.3337516',
                'gps_longitude' => '120.6140186',
            ],
            [
                'name' => 'FEMMS Swimming Pool',
                'venue_type_id' => 2,
                'gps_latitude' => '18.2092038',
                'gps_longitude' => '120.5902719',
            ],
            [
                'name' => 'Plaza Del Norte Hotel And Convention Center',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1347541',
                'gps_longitude' => '120.5316228',
            ],
            [
                'name' => "Robinson's Mall Activity Area Building A",
                'venue_type_id' => 2,
                'gps_latitude' => '18.1796625',
                'gps_longitude' => '120.5920653',
            ],
            [
                'name' => 'MMSU Tennis Court',
                'venue_type_id' => 2,
                'gps_latitude' => '18.0577522',
                'gps_longitude' => '120.5548531',
            ],
            [
                'name' => 'PCV Civic Center',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1564775',
                'gps_longitude' => '120.483695',
            ],
            [
                'name' => 'Northwestern University Gymnasium',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1866656',
                'gps_longitude' => '120.5661407',
            ],
            [
                'name' => 'Piddig Civic Center',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1561791',
                'gps_longitude' => '120.2364599',
            ],
            [
                'name' => 'Camp Valentin Covered Court',
                'venue_type_id' => 2,
                'gps_latitude' => '18.1971254',
                'gps_longitude' => '120.6036443',
            ],
        ];

        DB::table('venues')->insert($venues);
    }
}
