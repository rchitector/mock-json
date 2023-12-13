<html>
    <head>
        <title>Mock JSON{{ ' - '.$title ?? '' }}</title>
{{--        <link rel="stylesheet" href="{{ asset('css/visual-editor/tailwind.min.css') }}" />--}}
    </head>
    <body>
        <header class="bg-white">
            <x-mock-json::navigation.top-menu />
            <hr/>
            <h3>Mock JSON{{ ' - '.$title ?? '' }}</h3>
        </header>
        <hr/>
        {{ $slot }}
    </body>
</html>