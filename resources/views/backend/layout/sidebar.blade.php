<ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
        <a class="nav-link " href="index.html">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
        <a class="nav-link " href="{{ route('carousel.index') }}">
            <i class="bi bi-card-image"></i>
            <span>Carousel</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('categories.index') }}">
            <i class="bi bi-card-list"></i>
            <span>Category</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('event.index') }}">
            <i class="bi bi-calendar-event"></i>
            <span>Event</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('gallery.index') }}">
            <i class="bi bi-images"></i>
            <span>Gallery</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('event.index') }}">
            <i class="bi bi-person-badge"></i>
            <span>About Us</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{ route('company.index') }}">
            <i class="bi bi-building"></i>
            <span>Company</span>
        </a>
    </li>
    <hr class="text-danger">
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
    <hr class="text-danger fs-bold">
    <h5>From Client</h5>
    <li class="nav-item">
        <a href="">
            <i class="bi bi-message"></i>
            <span>Message</span>
        </a>
    </li>

</ul>
