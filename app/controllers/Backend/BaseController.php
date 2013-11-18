<?php

namespace Backend;

use \Vinko\Utils\FormValidation;
use \Illuminate\Support\Facades\View;


class BaseController extends \Controller {

    /**
     * hold the data from last request
     */
    protected $last_request = array();

    public function __construct() {
        // prepare some data from last request
        $this->last_request = array_merge(FormValidation::prepare(),
            $this->last_request);
    }

    /**
     * a better view making approach
     *
     * @param $tmpl_name template name
     * @param $provided user defined data, optional
     * @return View::make
     */
    protected function make_view($tmpl_name, $provided = array()) {
        return View::make($tmpl_name, array_merge(
            $provided,
            $this->last_request
        ));
    }
}
