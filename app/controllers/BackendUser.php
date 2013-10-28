<?php

use Illuminate\Support\MessageBag;


class BackendUser extends Controller {

    public function login() {
        $errors = new MessageBag();
        if ($old = Input::old('errors')) {
            $errors = $old;
        }
        $data = array(
            'errors' => $errors
        );

        // process login
        if (Input::server('REQUEST_METHOD') === 'POST') {
            $validator = Validator::make(Input::all(), array(
                'username' => 'required',
                'password' => 'required'
            ));

            if ($validator->passes()) {
                $credentials = array(
                    'username' => Input::get('username'),
                    'password' => Input::get('password')
                );

                if (Auth::attempt($credentials)) {
                    // TODO handle next parameters
                    return Redirect::route('dashboard');
                }
            }

            $data['errors'] = new MessageBag(array(
                // TODO i18n
                'password' => array('username or password invalid')
            ));

            return Redirect::route('user_login')->withInput($data);
        }

        // show login form
        return View::make('backend.login', $data);
    }

    public function logout() {
        Auth::logout();

        return Redirect::route('home');
    }

}
