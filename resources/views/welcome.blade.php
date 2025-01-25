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
    <body style="font-family: 'Sans';" class="h-[100vh] flex items-center justify-center">
        <div class='shadow w-2/4 h-100 flex flex-col p-6 gap-4'>
            {{-- <span>Contact Us</span> --}}
            <form action='{{ route('email.send') }}' method="POST">
                @csrf
                <input 
                    type="email"
                    placeholder="Enter your email" 
                    class='w-100 ring-blue-300 px-4 py-2 rounded ring focus:ring-2 duration-200 outline-none text-gray-700' 
                    name="Enter your email">

                <textarea
                    placeholder='Content...'
                    class='flex-grow w-full ring-blue-300 px-4 py-2 rounded ring focus:ring-2 duration-200 outline-none text-gray-700' 

                ></textarea>
                
                <button 
                    class='cursor-pointer bg-blue-400 text-white p-3 rounded shadow-sm focus:outline-none ring-blue-500 focus:ring-3 duration-200'
                    >Send Email</button>
            </form>

        </div>
    </body>
</html>
