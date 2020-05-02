<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.partial.landingpageheader')
        @section('title', 'home')
    </head>
    <body>
        @include('layout.partial.clientnavbar')

        @include('layout.partial.jumbotron')

        @include('layout.partial.artcategories')
        
        @include('layout.partial.footer')
    </body>
</html>