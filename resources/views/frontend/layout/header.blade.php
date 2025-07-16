<div class="flex items-center justify-between px-4 py-3">
    <!-- Logo -->
    <div class="header-logo">
        <img class="h-12 w-35" src="{{ asset('front/assets/images/logo.avif') }}" alt="Logo" />
    </div>
    <!-- Heading -->
    <div class="header-content">
        <h4 class="text-3xl font-semibold text-center">Local Events</h4>
    </div>
    <!-- Login Button -->
    <div class="login-button h-10 w-20 bg-red-400 px-3 py-1 rounded-md flex items-center justify-center">
        <a href="{{ route('login') }}" class="text-xl text-white hover:text-red-800 decoration-transparent">
            Login
        </a>
    </div>

</div>
