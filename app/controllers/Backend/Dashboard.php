<?php

namespace Backend;


class Dashboard extends BaseController {

    /**
     * GET /backend/
     */
    public function index() {
        return $this->make_view('backend.dashboard');
    }
}
