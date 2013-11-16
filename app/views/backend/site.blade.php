@extends('backend.module')
{{{-- */$current = 'site';/* --}}}

@section('module_name')
{{{ $site['name'] }}} 的信息
@stop

@section('module_content')
{{ Form::open(array('route' => 'post_backend_site', 'autocomplete' => 'off', 'class' => 'pure-form pure-form-stacked', 'files' => true)) }}
<div class="pure-control-group">
    {{ Form::label('name', '站点名称') }}
    {{ Form::text('name', $site['name']) }}
</div>
<div class="pure-controls">
	<button class="pure-button pure-button-primary" type="submit">修改信息</button>
</div>
{{ Form::close() }}
@stop
