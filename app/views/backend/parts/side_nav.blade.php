			{{-- dirty hack for default variable binding --}}
			{{-- */ $current = isset($current) ? $current : '' /*--}}
			<nav id="side-nav" class="pure-u-1-4">
                <section id="site-infos">
                    <h3>{{ $site['name'] }}</h3>
                </section>
                <ul class="items">
                    @foreach ($modules as $module)
                    <li class="item @if ($current === $module['slug']) current @endif"><a href="{{ $module['route'] }}">
                        <i class="fa fa-{{ $module['icon'] }}"></i>{{ $module['name'] }}
                    </a></li>
                    @endforeach
                </ul>
            </nav>
