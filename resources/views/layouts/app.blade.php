<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        @include('partials.header')
        @include('partials.leftSideBar')

        @yield('content')
    </div>
    <!-- END wrapper -->
    @include('partials.rightSideBar')


    @include('layouts.scripts')
</body>

</html>
