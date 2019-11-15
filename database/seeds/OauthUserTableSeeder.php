<?php

use Illuminate\Database\Seeder;

class OauthUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $oauthUsers = factory(\App\Models\OauthUser::class, 20)->make();

        \App\Models\OauthUser::insert($oauthUsers->toArray());
    }
}
