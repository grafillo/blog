<html>
<head>
    <title>@yield ('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<body>

<div class="container " >
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col">
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

                <li><a href="{{Route("index")}}" class="nav-link px-2 link-secondary">Главная</a></li>
                <li><a href="{{Route("create")}}" class="nav-link px-2 link-secondary">Создать статью</a></li>

            </ul>
        </div>
    </header>
</div>
        <div class="container">
            @yield ('content')
        </div>

