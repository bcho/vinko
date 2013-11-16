<?php

namespace Backend;

use \Illuminate\Support\Facades\Validator;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Redirect;
use \Illuminate\Support\MessageBag;

use \Site as SiteModel;


class Site extends BaseController {

    /**
     * GET /backend/site
     */
    public function index() {
        return $this->make_view('backend.site');
    }

    /**
     * POST /backend/site
     */
    public function update() {
        $validator = Validator::make(Input::all(), array(
            'name' => 'required'
        ));

        if ($validator->passes()) {
            $site = SiteModel::findOrFail(1);
            $site->update(Input::all());
            $site->save();

            return Redirect::route('get_backend_site')->withInput(array(
                'errors' => new MessageBag(array(
                    'success' => trans('messages.updated', array(
                        'name' => '站点信息'
                    ))
                ))
            ));
        }

        return Redirect::route('get_backend_info')->withErrors($validator);
    }
}
