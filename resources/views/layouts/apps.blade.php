<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--=============== FAVICON ===============-->
     <link rel="shortcut icon" href="{{asset('front/img/favicon.png')}}" type="image/x-icon">

     <!--=============== REMIX ICONS ===============-->
     <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

     <!--=============== FONTS CSS ===============-->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

    <!--=============== CSSS ===============-->
    <link rel="stylesheet" href="{{asset('front/fonts/stylesheet.css')}}">
     <title>xd Radio </title>
</head>
<body>
       <!-- Navbar -->
   @include('frontinclude.header')
   <!-- end Navbar -->
   <!-- Slider -->

       @yield('front')


   <!-- end Slider -->

   <!-- streaming -->

   <!-- end streaming -->

   @include('frontinclude.footer')
</body>

<script src="{{asset('front/js/scrollreveal.min.js')}}"> </script>
 <!--=============== MAIN JS ===============-->
<script src="{{asset('front/js/main.js')}}"> </script>

</html>
