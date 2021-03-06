<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- global styles.................. --}}

 <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            
    <link rel="stylesheet" href="{{ asset('vendor/sfaq/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sfaq/css/admin/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/sfaq/css/admin/admin.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/sfaq/css/custom/style.css') }}">   
    

    {{-- This yielding will recive custom style from individual pages --}}
        
    @yield('styles')  {{-- Note:acustomeclassrendaringmethodhasbeendefinedsodon'tneedtomake@section()insteaduse<x-sectionname=""> --}}
    

</head>
<body>

        <!--headers and Sidenav -->

        <x-sfaq::admin.layouts.admin-headers />
       
        {{ $slot }}


         <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('vendor/sfaq/js/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/sfaq/js/bootstrap.bundle.min.js') }}"></script>
 
  {{-- icon --}}
  <script src="https://kit.fontawesome.com/8f393145a9.js" crossorigin="anonymous"></script>
  <!-- Optional JS -->
  <script src="{{ asset('vendor/sfaq/js/main.js') }}"></script>


</body>
</html>