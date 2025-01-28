<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    </head>
    <body style="font-family: 'Sans';" class="h-[100vh] flex items-center">
        <form action='{{ route('email.send') }}' method="POST" class='w-[100vw] flex flex-col items-center justify-center'>
            <h2 class='text-gray-700 text-2xl '>Contact Me</h2>
            <div class='shadow w-full sm:w-2/4 h-100 flex flex-col p-2 md:p-6 gap-4'>
                {{-- <span>Contact Us</span> --}}
                    @csrf
                    <input 
                        type="text" 
                        placeholder="Enter your name" 
                        name="name"
                        class='w-full ring-blue-300 px-4 py-2 rounded ring focus:ring-2 duration-200 outline-none text-gray-700' 
                    >
                    <input 
                        type="email"
                        placeholder="Enter your email" 
                        name="email"
                        class='w-full ring-blue-300 px-4 py-2 rounded ring focus:ring-2 duration-200 outline-none text-gray-700' 
                    >

                    <textarea
                        placeholder='Content...'
                        class='flex-grow w-full ring-blue-300 px-4 py-2 rounded ring focus:ring-2 duration-200 outline-none text-gray-700' 
                        name='message'
                    ></textarea>
                    
                    <button 
                        class='cursor-pointer bg-blue-400 text-white p-3 rounded shadow-sm focus:outline-none ring-blue-500 focus:ring-3 duration-200'
                     >Submit</button>
            </div>
        </form>
    </body>
</html>
