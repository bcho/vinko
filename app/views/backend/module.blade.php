@extends('backend.layout')

@section('title')
{{ $site['name'] }} - 后台管理
@stop

@section('container')
    <section class="container">
        @include('backend.parts.head')
		@include('backend.parts.alert')
        <section id="dashboard" class="pure-g grid">
            <section id="main" class="pure-u-3-4">
                <!-- 模块名字 -->
                <header id="module-name">
                    <h1>@yield('module_name')</h1>
                </header>
                <!-- 模块内容 -->
                <article id="module-content">
					@yield('module_content')
                </article>
			</section>
			@include('backend.parts.side_nav')
        </section>
        @include('backend.parts.footer')
    </section>
@stop
