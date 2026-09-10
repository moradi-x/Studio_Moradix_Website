<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title','Admin Panel')
    </title>


    @vite(['resources/css/app.css'])

</head>


<body class="bg-gray-50">


<div class="min-h-screen flex">


    {{-- Sidebar --}}

    @include('admin.sections.sidebar')



    <div class="flex-1 flex flex-col">


        {{-- Header --}}

        @include('admin.sections.topbar')



        {{-- Content --}}

        <main class="flex-1 p-6">

            @yield('content')

        </main>



        {{-- Footer --}}

        @include('admin.sections.footer')


    </div>



</div>


</body>

</html>