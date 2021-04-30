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
         $this->call(category::class);
         $this->call(nation::class);
         $this->call(user::class);
         $this->call(film::class);
         $this->call(episode::class);

         $this->call(role::class);
         $this->call(message::class);
         $this->call(detail_film::class);
         $this->call(detail_category::class);
        // 
         
    }
}
