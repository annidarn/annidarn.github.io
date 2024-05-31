<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annida Rahma Nadhifa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,1000;1,9..40,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/') }}/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/css/aos.css">
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">
</head>

<body class="" id="body">

    @yield('content')

    <script src="{{ url('/') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
