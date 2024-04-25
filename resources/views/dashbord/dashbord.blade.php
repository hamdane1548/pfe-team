<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dashbord/dashbord.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

</head>
<body>
    @include('components.dashborditem.navbardashbord')
    <main>
        @include('components.dashborditem.sectiondashbord')
        @yield('content')
    </main>
    <script src="{{ asset('dashbord/dashbord.js') }}"></script>

</body>
</html>
<!DOCTYPE html>


