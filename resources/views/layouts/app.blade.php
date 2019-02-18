<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('inc.navbar')
<div class="container">
    @include('inc.messages')
    @include('flash::message')
    @yield('content')
</div>
<footer id="footer" class="text-center">
    <p>Copyright &copy; 2017 TodoList</p>
</footer>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    $('#flash-overlay-modal').modal();
</script>
</body>
</html>