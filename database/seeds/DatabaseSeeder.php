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
         $this->call(role::class);
         $this->call(user::class);
         $this->call(movie::class);
         $this->call(episode::class);
         $this->call(report::class);
         $this->call(movie_detail::class);
         $this->call(category_detail::class);
         $this->call(advertisement::class);
        // 
         
    }
}
