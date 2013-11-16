@extends('backend.module')
{{-- */$current = 'user';/* --}}

@section('module_name')
{{{ $current_user['username'] }}} 的信息
@stop

@section('module_content')
{{ Form::open(array('route' => 'post_backend_user_me', 'autocomplete' => 'off', 'class' => 'pure-form pure-form-stacked')) }}
<div class="pure-control-group">
    {{ Form::label('username', '登录名') }}
    {{ Form::text('username', $current_user['username'], array('disabled' => true)) }}
</div>
<div class="pure-control-group">
    {{ Form::label('display_name', '显示名字') }}
    {{ Form::text('display_name', $current_user['display_name']) }}
</div>
<div class="pure-controls">
    <button class="pure-button pure-button-primary" type="submit">修改信息</button>
</div>
{{ Form::close() }}

{{ Form::open(array('route' => 'post_backend_user_me_password', 'autocomplete' => 'off', 'class' => 'pure-form pure-form-stacked')) }}
<div class="pure-control-group">
    {{ Form::label('orig_password', '原密码') }}
    {{ Form::password('orig_password') }}
</div>
<div class="pure-control-group">
    {{ Form::label('password', '新密码') }}
    {{ Form::password('password') }}
</div>
<div class="pure-controls">
    <button class="pure-button pure-button-primary" type="submit">修改密码</button>
</div>
{{ Form::close() }}
@stop
