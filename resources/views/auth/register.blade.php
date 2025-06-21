{{--  @extends('frontend.layout.app')

@section('content')
    <div class="register-section bg-[#e2e2e2] flex justify-center min-h-screen items-center ">
    <div class="main-container  bg-[#fff] p-30 border-gray-200 shadow-md">
        <h1 class="text-3xl font-bold pb-3 text-[#ff1e00] text-center">Register</h1>
        <form action="" method="post" class="flex-col justify-between items-center gap-4">
            <!-- Username -->
            <div>
                <label for="username" class="block mb-2 text-sm font-medium text-gray-900">
                    Your userName
                </label>
                <input type="text" id="username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                    required />
            </div>
            <!-- Email -->
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                    Your email
                </label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                    placeholder="name@example.com" required />
            </div>
            <div>
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">
                    Your Contact
                </label>
                <input type="number" id="contact" name="contact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                    required />
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                    create password
                </label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                    placeholder="••••••••" required />
            </div>
            <!-- Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="text-white bg-[#ff1e00] hover:bg-[#ff1e02] focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-base text-center mt-6 hover:underline px-4 py-2 ">
                    Register
                </button>
            </div>
            <div>
                <span>I Already have an Account?</span><a href="" style="color: aquamarine"> Login</a>
            </div>
        </form>
    </div>
</div>

@endsection  --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <header class="header-section bg-[#fff] shadow-lg sticky top-0 z-50 w-full">
        <div class="flex items-center justify-between px-6 py-3">
            <!-- Logo -->
            <div class="header-logo">
                <a href="#">
                <img class="h-12 w-35" src="{{ asset('front/assets/images/logo.avif') }}" alt="Logo" />
                </a>
            </div>
            <!-- Heading -->
            <div class="header-content">
                <h4 class="text-3xl font-semibold text-center">Local Events</h4>
            </div>
        </div>
    </header>
    <main>
        <div class="register-section bg-[#e2e2e2] flex justify-center min-h-screen items-center ">
            <div class="main-container  bg-[#fff] p-30 border-gray-200 shadow-md">
                <h1 class="text-3xl font-bold pb-3 text-[#ff1e00] text-center">Register</h1>
                <form action="" method="post" class="flex-col justify-between items-center gap-4">
                    <!-- Username -->
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">
                            Your userName
                        </label>
                        <input type="text" id="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                            required />
                    </div>
                    <!-- Email -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                            Your email
                        </label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                            placeholder="name@example.com" required />
                    </div>
                    <div>
                        <label for="contact" class="block mb-2 text-sm font-medium text-gray-900">
                            Your Contact
                        </label>
                        <input type="number" id="contact" name="contact"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                            required />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                            create password
                        </label>
                        <input type="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                            placeholder="••••••••" required />
                    </div>
                    <!-- Button -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="text-white bg-[#ff1e00] hover:bg-[#ff1e02] focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-base text-center mt-6 hover:underline px-4 py-2 ">
                            Register
                        </button>
                    </div>
                    <div>
                        <span>I Already have an Account?</span><a href="" style="color: aquamarine"> Login</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
