@extends('frontend.layout.app')
@section('content')
    <div class="mt-2">
        <div id="carousel-section">
            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                @if ($carousel->isNotEmpty())
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        @foreach ($carousel as $index => $item)
                            <div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset($item->image) }}"
                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="{{ $item->title }}">
                            </div>
                        @endforeach
                    </div>

                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        @foreach ($carousel as $index => $item)
                            <button type="button"
                                class="w-3 h-3 rounded-full {{ $index === 0 ? 'bg-white' : 'bg-gray-300' }}"
                                aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"
                                data-carousel-slide-to="{{ $index }}">
                            </button>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-red-500 font-bold mt-4">No carousel items found.</p>
                @endif

                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="wrapper flex flex-col gap-6">
        <!-- Our Event Section -->
        <div id="event-section">
            <div class="category-title flex items-center justify-content-center gap-3 pt-4">
                <h3>Event Categories </h3>
                <a class="" href=""> <span>More...</span> <i
                        class="fa-solid fa-arrow-right font-lg text-2xl"></i></a>
            </div>
            <div
                class="container mt-2 grid grid-cols-1 place-items-center gap-2 md:grid-cols-2 place-items-center gap-3 lg:grid-cols-3 place-items-center gap-4 ">
                @if ($categories->isNotEmpty())
                    @foreach ($categories as $category)
                        <div
                            class="max-w-sm p-7 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $category->name }}
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ Str::words($category->description, 20, '...') }}
                            </p>
                            <a href="#"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#ff1e00] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="gallery-section bg-[#ff1e00]">
            <p class="uppercase text-white text-[15px] text-center font-normal pt-6">Nepal is a beautiful country</p>
            <div class="container bg-[#ffffff]">
                <h2 class="uppercase text-black-700 p-3 text-center">Explore Most Popular Uploads</h2>
                <hr>
                <div class="image-section grid grid-cols-3 gap-2 place-items-center justify-center items-center">
                    <div class="max-w-xs rounded-2xl overflow-hidden shadow-lg bg-white relative">
                        <!-- Image -->
                        <img class="h-70 w-2/2 rounded-md shadow-lg " src="/images/1751032036.jpg" alt="">
                        <!-- Content -->
                        <div class="p-4 flex justify-content-around items-center">
                            <h5 class="text-sm font-semibold text-gray-500">Beautiful Sunset</h5>
                            <div>
                                <a href="#">
                                    <i class="fa-solid fa-heart text-white bg-red-400 p-2 rounded-full hover:bg-red-600"></i>
                                </a>
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="max-w-xs rounded-2xl overflow-hidden shadow-lg bg-white relative">
                        <!-- Image -->
                        <img class="h-70 w-2/2 rounded-md shadow-lg " src="/images/1751030558.jpg" alt="">
                        <!-- Heart Icon -->
                        <!-- Content -->
                        <div class="p-4 flex justify-content-around items-center">
                            <h5 class="text-sm font-semibold text-gray-500">Beautiful Sunset</h5>
                            <div>
                                <a href="#">
                                    <i class="fa-solid fa-heart text-white bg-red-400 p-2 rounded-full hover:bg-red-600"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-xs rounded-2xl overflow-hidden shadow-lg bg-white relative">
                        <!-- Image -->
                        <img class="h-70 w-2/2 rounded-md shadow-lg " src="/images/1751032036.jpg" alt="">
                        <!-- Content -->
                        <div class="p-4 flex justify-content-around items-center">
                            <h5 class="text-sm font-semibold text-gray-500">Beautiful Sunset</h5>
                            <div>
                                <a href="#">
                                    <i class="fa-solid fa-heart text-white bg-red-400 p-2 rounded-full hover:bg-red-600"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-xs rounded-2xl overflow-hidden shadow-lg bg-white relative">
                        <!-- Image -->
                        <img class="h-70 w-2/2 rounded-md shadow-lg " src="/images/1751032036.jpg" alt="">
                        <!-- Content -->
                        <div class="p-4 flex justify-content-around items-center">
                            <h5 class="text-sm font-semibold text-gray-500">Beautiful Sunset</h5>
                            <div>
                                <a href="#">
                                    <i class="fa-solid fa-heart text-white bg-red-400 p-2 rounded-full hover:bg-red-600"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-footer bg-[#99241c] text-white mt-2">
                <h2 class="uppercase  text-center ">Start Your  Journey with Us</h2>
                <p class="text-center">Download Over a millions of photos</p>
            </div>
            </div>
            
        </div>

    </div>

@endsection
