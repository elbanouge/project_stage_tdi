<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application"s database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LanguageSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CardSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(PubSeeder::class);
        $this->call(MediaSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(PollSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(PageSeeder::class);
    }
}
