<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Management System</title>
    @vite('resources/css/app.css')
</head>
<body>


<div class="bg-gray-50 font-[sans-serif]">
    <div class="min-h-screen flex flex-col items-center justify-center py-6 px-4 relative before:content-[''] before:absolute before:inset-0 before:bg-black/50" style="background-image: url({{asset('/student/assets/image/library-bg.png')}}); background-repeat: no-repeat; background-size: cover;">
        <div class="max-w-md w-96 w-full ">
            <div class="bg-opacity-70 bg-white rounded p-6 shadow-[0_2px_16px_-3px_rgba(125,126,131,0.3)] relative z-10">
                <h2 class="text-gray-800 text-center text-2xl font-bold">Library Management System</h2>
                <div class="mt-8 space-y-4">
                    <div class="!mt-8">
                        <a href="{{route('student-login')}}" class="w-full block text-center py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                            Student Log-in Page
                        </a>
                    </div>
                    <div class="!mt-8">
                        <a href="{{route('student-register')}}" class="w-full block text-center py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-zinc-600 hover:bg-zinc-700 focus:outline-none">
                            Librarian Login Page
                        </a>
                    </div>
                    <div class="!mt-8">
                        <a href="{{route('login')}}" class="w-full block text-center py-3 px-4 text-sm tracking-wide rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none">
                            Admin Login Page
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
