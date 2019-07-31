<!DOCTYPE html>
<head>
    <title>Sample</title>
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @if (env('APP_DEBUG'))
        <script src="{{ asset('js/vue.js') }}"></script>
    @else
        <script src="{{ asset('js/vue.min.js') }}"></script>
    @endif
</head>

<body>
    <div class="container" id="app">
        @{{ message }}
    </div>
    <script>
      var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        })
    </script>
</body>
</html>