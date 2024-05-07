<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Expense Tracker</title>
    @include('includes.style')
</head>

<body class="dashboard">
<div id="preloader" class="preloader-wrapper">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div id="main-wrapper">
    @include('includes.header')
    @include('includes.sidebar')
    @yield('content')
    @include('includes.footer')
</div>
@include('includes.script')
@yield('page-js')
</body>
</html>
