<?php

namespace utils;

use \Illuminate\Support\Facades\Input;


class FormValidation {

    /**
     * Form validation data reload
     */
    public static function prepare() {
        $data = array();

        // provide the validation errors from last request
        if (($errors = Input::old('errors'))) {
            $data['errors'] = $errors;
        }

        return $data;
    }
}
