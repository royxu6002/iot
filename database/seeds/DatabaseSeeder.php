<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(OauthUserTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(InvoiceTableSeeder::class);

    }
}
