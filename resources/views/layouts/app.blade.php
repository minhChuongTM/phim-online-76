<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.common.head')
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -> dòng này khi cài npm install nó mới hoạt động. còn không cài npm install thì nó sẽ bị lỗi.
    sài bootstrap thì không cần dùng npm install nên comment dòng này lại thì nó sẽ hoạt động bình thường --}}
</head>

<body>
    <div id="app">
        @if (Auth::check('id'))
            {{-- header --}}
            @include('admin.common.header')
            {{-- end header --}}
            @include('admin.common.menu_sidebar')
            {{-- content --}}
        @endif

        <main>
            @yield('content')
        </main>
        {{-- end content --}}
    </div>
    @include('admin.common.foot')
</body>

</html>
