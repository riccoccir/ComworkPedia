<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.partial.landingpageheader')
    @section('title', 'Commission Detail')
</head>
<body>
    @include('layout.partial.usernavbar')
    
    //data berhasil dioper
    {{$data -> commission_name}}

    @include('layout.partial.footer')
</body>
</html>