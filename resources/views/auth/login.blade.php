@extends('frontend.layout.app')

@section('content')
    <!-- Centered Login Section -->
    <div id="login-section" class="flex flex-col justify-center items-center min-h-screen bg-gray-100">
        <div class="main-container w-80 max-w-md p-6 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>
            <form class="flex flex-col items-center gap-6">
                <!-- Email -->
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                        Your email
                    </label>
                    <input type="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                        placeholder="name@example.com" required />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                        Your password
                    </label>
                    <input type="password" id="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-10 px-4"
                        placeholder="••••••••" required />
                </div>

                <!-- Button -->
                <button type="submit"
                    class="text-white bg-[#ff1e00] hover:bg-[#ff1e02] focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-base text-center mt-6 hover:underline ">
                    Login
                </button>
                <span>I don't have an Account?</span><a href="{{ route('register') }}" style="color: aquamarine"> Register</a>
            </form>
        </div>
    </div>
@endsection
