<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link " href="index.html">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
        <a class="nav-link " href="{{ route('carousel.index') }}">
            <i class="bi bi-grid"></i>
            <span>Carousel</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('categories.index') }}">
            <i class="bi bi-grid"></i>
            <span>Category</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('event.index') }}">
            <i class="bi bi-grid"></i>
            <span>Event</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('gallery.index') }}">
            <i class="bi bi-grid"></i>
            <span>Gallery</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('event.index') }}">
            <i class="bi bi-grid"></i>
            <span>About Us</span>
        </a>
    </li>
        {{--  end  of carousel  --}}
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->
</ul>
