@extends('backend.layout')

@section('title')
vinko - 后台登录
@stop

@section('container') 
<div class="container medium">
    <div class="wrapper" id="login">
        @include('backend.parts.alert')
        <div class="grid">
            <header>
                <h1>欢迎回来</h1>
            </header>
            {{ Form::open(array(
                    "route" => "post_backend_login",
                    "autocomplete" => "off",
                    "class" => "pure-form pure-form-aligned"
                ))
            }}
            <div class="pure-control-group">
                {{ Form::label("username", "用户名") }}
                {{ Form::text("username", Input::old("username"),
                              array("class" => "pure-u-1-2"))
                }}
            </div>
            <div class="pure-control-group">
                {{ Form::label("password", "密码") }}
                {{ Form::password("password", array("class" => "pure-u-1-2")) }}
            </div>
            <div class="pure-controls">
                <button class="pure-button pure-button-primary" type="submit">登入</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    </div>
@stop
