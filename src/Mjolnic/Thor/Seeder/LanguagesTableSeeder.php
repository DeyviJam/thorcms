<?php

class LanguagesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('languages')->truncate();

        $languages = array(
            array(
                'name' => 'Español',
                'code' => 'es',
                'is_active' => 1,
                'sorting' => 1
            ),
            array(
                'name' => 'English',
                'code' => 'en',
                'is_active' => 1,
                'sorting' => 2
            ),
        );

        // Uncomment the below to run the seeder
        DB::table('languages')->insert($languages);
    }

}
