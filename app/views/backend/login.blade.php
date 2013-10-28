<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user login</title>
</head>
<body>
    <div class="container">
        <section id="login">
            {{ Form::open(["route" => "user_login", "autocomplete" => "off" ]) }}
            {{ Form::label("username", "Username") }}
            {{ Form::text("username", Input::old("username")) }}
            {{ Form::label("password", "Password") }}
            {{ Form::password("password", Input::old("password")) }}
            {{ Form::submit("login") }}
            @if ($error = $errors->first("password"))
                <div class="error">{{ $error }}</div>
            @endif
            {{ Form::close() }}
        </section>
    </div>
</body>
</html>
