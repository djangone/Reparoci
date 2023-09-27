<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="description" content="<meta name=&quot;description&quot; content=&quot;&quot;"/>
    <meta name="viewport" content="initial-scale=1, width=device-width">

    <title>Reparo</title>

    <link rel="stylesheet" href="{{url("frontend/css/global.css")}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" />

    <link rel="stylesheet"  href="{{url("frontend/css/header.css")}}" />
    <link rel="stylesheet"  href="{{url("frontend/css/footer.css")}}" />
    <link rel="stylesheet"  href="{{url("frontend/css/reparostyle.css")}}" />
        @stack("pagecss")
    </head>
    <body>
    <div class="reparo-app">
        @include("layouts.header")
<div class="reparo-wrapper">
    @yield("main")
</div>
        @include("layouts.footer")
    </div>

    @stack("pagejs")
    </body>
  </html>
