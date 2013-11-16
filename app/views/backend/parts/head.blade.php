        <header id="head" class="pure-g grid">
            <section id="logo" class="pure-u-1-6">
                <a href="{{ URL::route('get_backend_dashboard') }}">
                    <h1>{{ $site['name'] }}</h1>
                </a>
            </section>
            <section id="sub-nav" class="pure-u-7-12"></section>
            <nav class="pure-u-1-4" id="head-nav">
                <a class="item" href="{{ URL::route('get_backend_user_me') }}">
                    <i class="fa fa-user"></i>{{ $current_user['username'] }}
                </a>
                <a class="item" href="{{ URL::route('get_backend_logout') }}">
                    <i class="fa fa-sign-out"></i>注销
                </a>
            </nav>
        </header>
