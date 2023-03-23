<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container w-[100rem] mx-auto flex-1 flex flex-col items-center justify-center px-2 ">

            <form action="/register" method="post" enctype="multipart/form-data"
                class="bg-white px-1 py-2 rounded shadow-md text-black w-full ">
                @csrf
                <h1 class="mb-8 text-3xl text-center">Register User</h1>


                @if ($errors->any())
                    <div class="w-full bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-5 rounded relative">
                        Validation Error
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-close">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="w-full bg-red-100 border border-red-400 text-red-700 px-4 py-3 my-5 rounded relative">
                        {{ session()->get('error') }}
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-close">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                    </div>
                @endif

                @if (session()->has('success'))
                    <div
                        class="w-full bg-green-100 border border-green-400 text-green-700 px-4 py-3 my-5 rounded relative">
                        {{ session()->get('success') }}
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-close">
                            <svg class="fill-current h-6 w-6 text-green-500" role="button"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                    </div>
                @endif

                <div class="mb-5">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input type="text" name="name" id="name"
                        class="shadow appearance-none border w-full py-2 px-3 rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter User Name" />
                    @error('name')
                        <p class="text-red-500 text-xs italic mt-3"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input type="email" name="email" id="email"
                        class="shadow appearance-none border w-full py-2 px-3 rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="Enter Email Address" />
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-3"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input type="password" name="password" id="password"
                        class="shadow appearance-none border w-full py-2 px-3 rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        placeholder="******" />
                    @error('password')
                        <p class="text-red-500 text-xs italic mt-3"> {{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="w-full text-center text-white bg-green-500 py-2 my-2 focus:outline-none rounded-sm  hover:bg-green-700">Create
                        User </button>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    const alertClose = document.querySelector('.alert-close');
    alertClose.addEventListener('click', function() {
        console.log(alertClose.parentNode.remove(), "click");
    });
</script>

</html>
