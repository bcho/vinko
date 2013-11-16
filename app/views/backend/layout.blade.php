<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'vinko')</title>
    @section('head')
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('styles/backend/vendor/pure-min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('styles/backend/style.css') }}" />
    @show
</head>
<body>
@yield('container')
</body>
@section('scripts')
<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
<script src="{{ URL::asset('scripts/backend/vinko.js') }}"></script>
@show
</html>
