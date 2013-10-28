<?php

class UserSeeder extends Seeder {
    public function run() {
        DB::table('users')->delete();

        if ($user = Config::get('vinko.root', false)) {
            User::create(array(
                'username' => $user['username'],
                'password' => Hash::make($user['password'])
            ));
        }

        if ($user = Config::get('vinko.admin', false)) {
            User::create(array(
                'username' => $user['username'],
                'password' => Hash::make($user['password'])
            ));
        }
    }
}
