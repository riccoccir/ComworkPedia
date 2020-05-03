<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.partial.landingpageheader')
    @section('title', 'Commission Detail')
</head>
<body>
    @include('layout.partial.usernavbar')
    
    {{$data -> commission_name}}

    @include('layout.partial.footer')
</body>
</html>