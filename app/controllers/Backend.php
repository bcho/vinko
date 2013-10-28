<?php

class Backend extends Controller {
    public function dashboard() {
        $users = User::all();

        var_dump($users);
    }
}
