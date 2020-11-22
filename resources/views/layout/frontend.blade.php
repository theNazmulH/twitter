<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <title>
        @yield('title')
    </title>
    <style>
        textarea{
            color: #000;
            width: 100%;
            padding: 15px;
        }
        textarea:focus{
            outline: 0;
            border: 0;
        }
    </style>

</head>

<body class="flex items-center justify-center w-full">
<div class="bg-white w-full">
    <div class="flex">
        {{--Left Menu--}}
        <div class="w-2/5 text-dark h-12 pl-32 py-4">
            @include('partials._left_menu')
        </div>
        {{--Middle Wall--}}
        <div class="w-3/5 border border-gray-400  border-t-0 py-4">
            @yield('content')
        </div>
        {{--Right Menu--}}
        <div class="w-2/5 h-12">
            @include('partials._right_menu')
        </div>
    </div>
</body>

</html>
