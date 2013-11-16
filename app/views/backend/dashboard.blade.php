@extends('backend.module')

@section('module_name')
欢迎， {{{ $current_user['display_name'] }}}
@stop

@section('module_content')
<ul class="badges">
	<li><a class="badge" href="{{{ URL::route('get_backend_site') }}}">站点信息</a></li>
	<li><a class="badge" href="{{{ URL::route('get_backend_user') }}}">用户信息</a></li>
</ul>
@stop
