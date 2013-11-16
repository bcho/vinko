@extends('backend.module')
{{-- */$current = 'user';/* --}}

@section('module_name')
用户信息
@stop

@section('module_content')
<ul class="badges">
	<li><a class="badge" href="{{ URL::route('get_backend_user_me') }}">个人信息</a></li>
</ul>
@stop
