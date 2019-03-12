<?php

use Illuminate\Database\Seeder;
use App\Service ;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Service::truncate() ;

       $s1 = Service::create(['description'=>'service financement description',
           'name'=>'Financement',
           'category'=>'none']);

        $s1 = Service::create(['description'=>'service accompagnement description',
            'name'=>'accompagnement',
            'category'=>'none']);

        $s1 = Service::create(['description'=>'service creation-des-entreprises description',
            'name'=>'Creation des entreprises',
            'category'=>'none']);

        $s1 = Service::create(['description'=>'service coaching description',
            'name'=>'Coaching',
            'category'=>'none']);

        // Services Informatiques

        $s1 = Service::create(['description'=>'service creation-des-sites-web description',
            'name'=>'Creation site web',
            'category'=>'informatique']);

        $s1 = Service::create(['description'=>'service creation-des-applications-mobiles description',
            'name'=>'Creation des application mobiles',
            'category'=>'informatique']);

        $s1 = Service::create(['description'=>'service accompagnement-numerique description',
            'name'=>'Accompagnement numerique',
            'category'=>'informatique']);

        $s1 = Service::create(['description'=>'service Coaching informatique description',
            'name'=>'Coaching informatique',
            'category'=>'informatique']);
    }
}
