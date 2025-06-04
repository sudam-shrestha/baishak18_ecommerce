<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 Page Not Found</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative">
        <a href="{{route('home')}}" class="shadow hover:shadow-lg absolute top-10 left-20 bg-white px-4 py-1 rounded-2xl text-[#fcb82f]">go back</a>
        <img class="w-full h-[100vh] object-cover" src="https://media.geeksforgeeks.org/wp-content/uploads/20230802153215/Error-404.png" alt="">
    </div>
</body>

</html>
