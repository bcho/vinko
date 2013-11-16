<?php

namespace Backend;

use \Illuminate\Support\Facades\Validator;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Hash;
use \Illuminate\Support\MessageBag;

use \User as UserModel;


class User extends BaseController {

    /**
     * GET /backend/user/me
     */
    public function me() {
        return $this->make_view('backend.me');
    }

    /**
     * POST /backend/user/me
     */
    public function update_me() {
		Validator::extend('field_unique', function($attr, $value, $paras) {
			$user = Auth::user();
			if ($value === $user[$paras[0]]) {
				return true;
			}

			// bugfix for PHP 5.3.x
			// it's really wired that ->count() will return
			// string instead of integer
			$count = intval(UserModel::where($paras[0], '=', $value)->count());
			return ($count === 0);
        });

        $validator = Validator::make(Input::all(), array(
            'display_name' => 'required|field_unique:display_name'
        ));

        if ($validator->passes()) {
            $current_user = Auth::user();
            $current_user->display_name = Input::get('display_name');
            $current_user->save();

            $data = array(
                'errors' => new MessageBag(array(
					'success' => trans('messages.updated', array(
						'name' => '用户信息'
					))
                ))
            );

            return Redirect::route('get_backend_user_me')->withInput($data);
        }

        return Redirect::route('get_backend_user_me')->withErrors($validator);
    }

    /**
     * POST /backend/user/me/password
     */
    public function update_me_password() {
		Validator::extend('password_match', function($attr, $value, $paras) {
			$user = Auth::user();
			return Hash::check($value, $user->password);
        });

		$validator = Validator::make(Input::all(), array(
			'orig_password' => 'required|password_match',
			'password' => 'required|min:6|max:15'
        ));

        if ($validator->passes()) {
			$current_user = Auth::user();
			$current_user->password = Hash::make(Input::get('password'));
			$current_user->save();
			Auth::logout();

			$data = array(
				'errors' => new MessageBag(array(
					'success' => trans('messages.password_updated')
				))
            );

            return Redirect::route('get_backend_login')->withInput($data);
        }

        return Redirect::route('get_backend_user_me')->withErrors($validator);
    }

    /**
     * GET /backend/user
     */
    public function index() {
        return $this->make_view('backend.user');
    }
}
