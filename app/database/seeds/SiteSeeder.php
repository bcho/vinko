<?php

class SiteSeeder extends Seeder {
    public function run() {
        DB::table('site')->delete();
        Site::create(Config::get('vinko.site'));
    }
}
