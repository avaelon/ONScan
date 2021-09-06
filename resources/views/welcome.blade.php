<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee Stats</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .employee-login.pt-8 {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            @media only screen and (max-width: 425px) {
                    .employee-login img {
                        max-width: 200px;
                        padding-left:50px;
                    }
                    .employee-login.pt-8{

                        height: 100vh;
                    }
                }
        </style>
    </head>
    <body class="antialiased" style="overflow-y:hidden;">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('admin/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                    <div class="employee-login">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" style="float: right;"> Log in</a>
                    </div>
                    @endauth
                </div>
            @endif
                <div class="employee-login pt-8" >
                   <img style="margin-top:15%;" src="{{asset('backend/images/logo/logo.png')}}" alt="">
                </div>
        </div>
    </body>
</html>
