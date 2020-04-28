<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layout.partial.landingpageheader')
        @section('title', 'home')
    </head>
    <body>
        @include('layout.partial.guestnavbar')

        @include('layout.partial.jumbotron')

        @include('layout.partial.artcategories')
        
        @include('layout.partial.footer')

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
            Launch demo modal
        </button>
    </body>
</html>