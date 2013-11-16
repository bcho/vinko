<?php

namespace Backend;

use \Illuminate\Support\Facades\Validator;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\Auth as UserAuth;
use \Illuminate\Support\MessageBag;


class Auth extends BaseController {

    /**
     * GET /backend/login
     */
    public function index() {
        return $this->make_view('backend.login');
    }

    /**
     * POST /backend/login
     */
    public function login() {
        $validator = Validator::make(Input::all(), array(
            'username' => 'required',
            'password' => 'required'
        ));

        if ($validator->passes()) {
            $credentials = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );

            if (UserAuth::attempt($credentials)) {
                return Redirect::intended('/backend');
            }
        }

        $data = array(
            'errors' => new MessageBag(array(
                'password' => trans('messages.login_error')
            ))
        );

        return Redirect::route('get_backend_login')->withInput($data);
    }

    /**
     * GET /backend/logout
     */
    public function logout() {
        UserAuth::logout();

        return Redirect::route('home');
    }
}
