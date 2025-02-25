@extends('components.main')
@section('content')
    {{-- BANNER --}}
    <div class="max-w-full mx-auto">
        <section id="carousel" class="relative overflow-hidden">
            <!-- Carousel Wrapper -->
            <div class="relative h-56 sm:h-72 md:h-[80vh]">
                <!-- Slides -->
                <div class="absolute inset-0 flex transition-opacity duration-700 ease-in-out active" data-carousel-item>
                    <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/Banner/Banner_200000001202519142336297.jpeg') }}"
                        class="object-cover object-center w-full h-full" alt="First Slide">
                </div>
                <div class="absolute inset-0 hidden transition-opacity duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/Banner/Banner_200000001202519142659590.jpeg') }}"
                        class="object-cover object-center w-full h-full" alt="Second Slide">
                </div>
                <div class="absolute inset-0 hidden transition-opacity duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/Banner/Banner_200000001202516135049665.jpeg') }}"
                        class="object-cover object-center w-full h-full" alt="Third Slide">
                </div>
            </div>
            <!-- Indicators -->
            <div class="absolute bottom-4 left-1/2 flex space-x-2 -translate-x-1/2">
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none transition"
                    aria-label="Go to slide 1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none transition"
                    aria-label="Go to slide 2"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none transition"
                    aria-label="Go to slide 3"></button>
            </div>
            <!-- Controls -->
            <button type="button"
                class="absolute top-1/2 left-2 flex items-center justify-center w-8 h-8 bg-gray-200/70 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-prev>
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button type="button"
                class="absolute top-1/2 right-2 flex items-center justify-center w-8 h-8 bg-gray-200/70 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-next>
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </section>
    </div>
    
    {{-- ABOUT US --}}
    <div class="bg-gray-100 px-6 py-12 md:px-12 lg:px-24">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-6">
            <!-- Left: Image -->
            <div class="w-full md:w-1/2">
                <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/ContentImages/202229102935515principal_2020_inn.jpg') }}"
                    alt="Principal Image" class="w-full h-auto rounded-lg shadow-lg">
            </div>

            <!-- Right: Text Content -->
            <div class="w-full md:w-1/2 text-gray-800">
                <h2 class="text-xl font-bold mb-4">
                    “A child’s foot should be planted in his country, but his eyes should survey the world.”
                </h2>
                <p class="text-sm mb-4">
                    Our mentors at school ignite the spark of creativity and curiosity in our students.
                    We strive to provide an environment that is sacred and has a flexible framework of discipline.
                </p>
                <p class="text-sm mb-4">
                    We encourage parents’ involvement in their ward’s education, as parent-school collaboration
                    yields the best results in shaping careers.
                </p>
                <p class="text-sm italic font-semibold">
                    “Educating the mind without educating the heart is no education at all.” – Aristotle
                </p>
                <p class="text-sm mt-4">
                    We impart education to match advancements in technology and globalization while instilling moral
                    values and principles. Our goal is to nurture students into responsible global citizens.
                </p>
            </div>
        </div>
    </div>

    {{-- Latest news --}}
    <div class="flex justify-center p-6">
        <h1 class="text-center text-2xl sm:text-3xl md:text-4xl font-bold w-full">
            Latest News & Updates
        </h1>
    </div>

    <div class="flex  flex-col md:flex-row gap-8 w-full px-12 py-4 justify-center ">
        <div class="bg-white rounded-lg shadow-lg w-full md:w-100 p-4">
            <div class="bg-teal-700 text-white py-3 px-4 font-semibold flex items-center">
                <i class="ri-bar-chart-box-line mr-2"></i> News and Updates
            </div>
            <div id="news-slider" class="relative h-40 overflow-hidden mt-4">
                <div class="news-item absolute w-full transition-transform duration-500">
                    <div class="flex items-start space-x-4 p-4">
                        <div class="bg-teal-600 text-white px-3 py-2 rounded-md text-center">
                            <p class="text-lg font-bold">30</p>
                            <p class="text-xs">May</p>
                            <p class="text-xs">24</p>
                        </div>
                        <div class="text-gray-800 text-sm">
                            <p class="font-semibold">Summer Vacation - 2024-25</p>
                            <p>IX-XII Summer Vacation - 2024-25</p>
                        </div>
                        <i class="ri-attachment-2 text-gray-500"></i>
                    </div>
                </div>
                <div class="news-item absolute w-full transition-transform duration-500">
                    <div class="flex items-start space-x-4 p-4">
                        <div class="bg-teal-600 text-white px-3 py-2 rounded-md text-center">
                            <p class="text-lg font-bold">25</p>
                            <p class="text-xs">May</p>
                            <p class="text-xs">24</p>
                        </div>
                        <div class="text-gray-800 text-sm">
                            <p class="font-semibold">Class IV - 3rd Language Syllabus</p>
                            <p>Dear Parents, Kindly find the attached PDF for your ward. Regards, Class Teacher.</p>
                        </div>
                        <i class="ri-attachment-2 text-gray-500"></i>
                    </div>
                </div>
                <div class="news-item absolute w-full transition-transform duration-500">
                    <div class="flex items-start space-x-4 p-4">
                        <div class="bg-teal-600 text-white px-3 py-2 rounded-md text-center">
                            <p class="text-lg font-bold">30</p>
                            <p class="text-xs">May</p>
                            <p class="text-xs">24</p>
                        </div>
                        <div class="text-gray-800 text-sm">
                            <p class="font-semibold">Summer Vacation - 2024-25</p>
                            <p>IX-XII Summer Vacation - 2024-25</p>
                        </div>
                        <i class="ri-attachment-2 text-gray-500"></i>
                    </div>
                </div>
                <div class="news-item absolute w-full transition-transform duration-500">
                    <div class="flex items-start space-x-4 p-4">
                        <div class="bg-teal-600 text-white px-3 py-2 rounded-md text-center">
                            <p class="text-lg font-bold">25</p>
                            <p class="text-xs">May</p>
                            <p class="text-xs">24</p>
                        </div>
                        <div class="text-gray-800 text-sm">
                            <p class="font-semibold">Class IV - 3rd Language Syllabus</p>
                            <p>Dear Parents, Kindly find the attached PDF for your ward. Regards, Class Teacher.</p>
                        </div>
                        <i class="ri-attachment-2 text-gray-500"></i>
                    </div>
                </div>
            </div>
            <div class="flex justify-between p-4">
                <button onclick="prevSlide()" class="bg-gray-200 hover:bg-gray-300 p-2 rounded-md">
                    <i class="ri-arrow-up-s-line"></i>
                </button>
                <button onclick="nextSlide()" class="bg-gray-200 hover:bg-gray-300 p-2 rounded-md">
                    <i class="ri-arrow-down-s-line"></i>
                </button>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg w-full md:w-100 p-0">
            <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/ContentImages/20251614441580post1.jpg') }}"
                alt="" class="w-auto h-auto object-cover">
        </div>
    </div>

    {{-- slider groups --}}
    <div class="flex justify-center p-6 bg-gray-100">
        <h1 class="text-center text-2xl sm:text-3xl md:text-4xl font-bold w-full">
            Our Group Institutions
        </h1>
    </div>
    
    <div class="bg-gray-100 flex items-center justify-center min-h-auto p-4">
        <div class="relative w-full max-w-5xl overflow-hidden">
            <!-- Slider Container -->
            <div class="slider-container rounded-lg shadow-lg overflow-hidden relative">
                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Cloned Last Slide (for smooth transition) -->
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner3.jpg') }}" class="rounded-lg w-full shadow-md" alt="Image 3">
                    </div>
                    <!-- Original Slides -->
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full shadow-md" alt="Image 1">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner2.jpg') }}" class="rounded-lg w-full shadow-md" alt="Image 2">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner3.jpg') }}" class="rounded-lg w-full shadow-md" alt="Image 3">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full shadow-md" alt="Image 4">
                    </div>
                    <!-- Cloned First Slide (for smooth transition) -->
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full shadow-md" alt="Image 1">
                    </div>
                </div>
            </div>
    
            <!-- Navigation Buttons -->
            <button id="prev"
                class="absolute left-3 top-1/2 transform -translate-y-1/2 p-3 rounded-full bg-white shadow-md hover:bg-gray-300">
                ❮
            </button>
            <button id="next"
                class="absolute right-3 top-1/2 transform -translate-y-1/2 p-3 rounded-full bg-white shadow-md hover:bg-gray-300">
                ❯
            </button>
        </div>
    </div>
    
  


    {{-- simple slider --}}
    <div class=" flex items-center justify-center min-h-full py-2 relative">

        <div class="relative w-full md:h-96 h-auto overflow-hidden ">
            <!-- Slider Wrapper -->
            <div id="sliderWrapper" class="relative flex transition-transform duration-700 ease-in-out">
                <!-- Slide 1 -->
                <div class="relative w-full flex-shrink-0">
                    <img src="{{ asset('asset/img/banner1.jpg') }}" class="w-full h-auto  object-cover">

                </div>
                <!-- Slide 2 -->
                <div class="relative w-full flex-shrink-0">
                    <img src="{{ asset('asset/img/banner2.jpg') }}" class="w-full h-auto object-cover">

                </div>
                <!-- Slide 3 -->
                <div class="relative w-full flex-shrink-0">
                    <img src="{{ asset('asset/img/banner1.jpg') }}" class="w-full h-auto object-cover">

                </div>
            </div>

            <!-- Navigation Buttons -->
            {{-- <button id="prevBtn"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-black p-3 rounded-full shadow-lg transition-all duration-300">
                ❮
            </button>
            <button id="nextBtn"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-black p-3 rounded-full shadow-lg transition-all duration-300">
                ❯
            </button> --}}

            <!-- Dots Indicator -->
            {{-- <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <span class="dot w-3 h-3 bg-white/50 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white/50 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-white/50 rounded-full cursor-pointer"></span>
            </div> --}}
        </div>
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/40 to-black/60 h-[90%] md:h-[97%] mt-2">
        </div>
    </div>
    {{-- Acheivements and learning --}}
    <div class="bg-gray-100 flex items-center justify-center min-h-auto p-4">
        <div class="relative w-full max-w-5xl overflow-hidden">
            <!-- Responsive Titles -->
            <div class="flex flex-col md:flex-row justify-evenly text-center md:text-left">
                <h1 class="text-xl md:text-2xl font-semibold p-2">Achievements</h1>
                <h1 class="text-xl md:text-2xl font-semibold p-2">Experiential Learning Corner</h1>
            </div>

            <!-- Slider Wrapper -->
            <div class="slider-wrapper rounded-lg shadow-lg overflow-hidden mt-4 relative">
                <div id="imageSlider" class="flex transition-transform duration-500 ease-in-out">
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full shadow-md"
                            alt="Slide 1">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner2.jpg') }}" class="rounded-lg w-full shadow-md"
                            alt="Slide 2">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner3.jpg') }}" class="rounded-lg w-full shadow-md"
                            alt="Slide 3">
                    </div>
                    <div class="slide w-full md:w-1/2 flex-shrink-0 p-3">
                        <img src="{{ asset('asset/img/banner1.jpg') }}" class="rounded-lg w-full shadow-md"
                            alt="Slide 4">
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prevSlide"
                class="slider-btn absolute left-3 top-1/2 transform -translate-y-1/2 p-3 rounded-full bg-white shadow-md hover:bg-gray-300">❮</button>
            <button id="nextSlide"
                class="slider-btn absolute right-3 top-1/2 transform -translate-y-1/2 p-3 rounded-full bg-white shadow-md hover:bg-gray-300">❯</button>
        </div>
    </div>
    {{-- testimonial --}}
    <div class="flex justify-center items-center min-h-auto bg-teal-700">
        <div class="w-full max-w-2xl text-white text-center p-6">
            <h2 class="text-3xl font-bold">Our Happy Parents</h2>
            <div class="w-24 h-1 bg-white mx-auto my-2"></div>

            <div class="relative overflow-hidden mt-6">
                <div class="flex transition-transform duration-500" id="testimonial-slider">
                    <div class="w-full flex-shrink-0 text-center">
                        <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/Banner/Banner_20000000120241119114444965.jpeg') }}"
                            class="mx-auto w-24 h-24 rounded-full border-4 border-white" alt="Parent Image">
                        <h3 class="text-lg font-semibold mt-4">Parent of Virat Malhotra - 3A</h3>
                        <p class="mt-2">Parents are very happy and satisfied with the quality education at Allenhouse.
                            Have seen a drastic and positive change in their child. Rewarded Principal ma’am with the
                            Amazing Principal award.</p>
                    </div>
                    <div class="w-full flex-shrink-0 text-center">
                        <img src="{{ asset('https://apskhl.superhouseerp.com//Uploads/Site/APSKHL/Banner/Banner_20000000120241119114444965.jpeg') }}"
                            class="mx-auto w-24 h-24 rounded-full border-4 border-white" alt="Parent Image">
                        <h3 class="text-lg font-semibold mt-4">Parent of Ayesha Sharma - 2B</h3>
                        <p class="mt-2">The school provides excellent education and focuses on overall student
                            development. We are extremely happy with the teachers and the curriculum.</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center space-x-2 mt-4">
                <span class="w-3 h-3 bg-white rounded-full cursor-pointer" onclick="changeTestimonial(0)"></span>
                <span class="w-3 h-3 bg-gray-400 rounded-full cursor-pointer" onclick="changeTestimonial(1)"></span>
            </div>
        </div>
    </div>
    <script>
        const slider = document.getElementById('testimonial-slider');
        let index = 0;

        function changeTestimonial(i) {
            index = i;
            slider.style.transform = `translateX(-${index * 100}%)`;
        }
    </script>

    {{-- Acheivements and learnig --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById("imageSlider");
            let slides = document.querySelectorAll(".slide");
            const prevBtn = document.getElementById("prevSlide");
            const nextBtn = document.getElementById("nextSlide");

            let index = 1; // Start at 1 because of cloned elements
            const slideWidth = slides[0].offsetWidth;
            let autoSlideInterval;

            // Clone first and last slides
            const firstClone = slides[0].cloneNode(true);
            const lastClone = slides[slides.length - 1].cloneNode(true);

            // Add clones to the slider
            slider.appendChild(firstClone);
            slider.insertBefore(lastClone, slides[0]);

            // Re-fetch slides after cloning
            slides = document.querySelectorAll(".slide");

            // Set initial position
            slider.style.transform = `translateX(-${index * slideWidth}px)`;

            // Function to move the slider smoothly
            function updateSlider() {
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(-${index * slideWidth}px)`;
            }

            // Move to the next slide
            function nextSlide() {
                if (index >= slides.length - 1) return;
                index++;
                updateSlider();
            }

            // Move to the previous slide
            function prevSlide() {
                if (index <= 0) return;
                index--;
                updateSlider();
            }

            // Reset transition for seamless loop
            slider.addEventListener("transitionend", () => {
                if (index === slides.length - 1) {
                    slider.style.transition = "none";
                    index = 1;
                    slider.style.transform = `translateX(-${index * slideWidth}px)`;
                }
                if (index === 0) {
                    slider.style.transition = "none";
                    index = slides.length - 2;
                    slider.style.transform = `translateX(-${index * slideWidth}px)`;
                }
            });

            // Auto slide function
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 4000);
            }

            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
            }

            // Event Listeners
            nextBtn.addEventListener("click", nextSlide);
            prevBtn.addEventListener("click", prevSlide);

            // Pause autoplay on hover
            slider.addEventListener("mouseenter", stopAutoSlide);
            slider.addEventListener("mouseleave", startAutoSlide);

            // Start autoplay on page load
            startAutoSlide();
        });
    </script>

    {{-- sliedr image overlay --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById("sliderWrapper");
            const dots = document.querySelectorAll(".dot");

            let index = 0;
            const totalSlides = slider.children.length;
            let autoSlide;

            function updateSlider() {
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(${-index * 100}%)`;

                dots.forEach((dot, i) => {
                    dot.classList.toggle("bg-white", i === index);
                });
            }

            function nextSlide() {
                if (index < totalSlides - 1) {
                    index++;
                } else {
                    // Smoothly transition from last slide to first
                    index = 0;
                    slider.style.transition = "none"; // Remove transition for instant reset
                    slider.style.transform = `translateX(0)`;
                }
                setTimeout(() => {
                    updateSlider();
                }, 10); // Small delay to re-enable transition after reset
            }

            function prevSlide() {
                index = (index - 1 + totalSlides) % totalSlides;
                updateSlider();
            }

            dots.forEach((dot, i) => {
                dot.addEventListener("click", () => {
                    index = i;
                    updateSlider();
                });
            });

            // Auto-play function
            function startAutoSlide() {
                autoSlide = setInterval(nextSlide, 3000);
            }

            function stopAutoSlide() {
                clearInterval(autoSlide);
            }

            // Pause autoplay on hover
            slider.addEventListener("mouseenter", stopAutoSlide);
            slider.addEventListener("mouseleave", startAutoSlide);

            // Start autoplay
            startAutoSlide();
        });
    </script>
    {{-- Our Group Institutions script --}}
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slider = document.getElementById("slider");
            const prev = document.getElementById("prev");
            const next = document.getElementById("next");

            let index = 0;
            let slidesToShow = window.innerWidth < 640 ? 1 : 2; // 1 image on mobile, 2 on desktop
            const totalSlides = slider.children.length;

            function updateSlider() {
                const slideWidth = slider.children[0].clientWidth;
                slider.style.transform = `translateX(${-index * slideWidth}px)`;
            }

            function nextSlide() {
                if (index < totalSlides - slidesToShow) {
                    index++;
                } else {
                    index = 0;
                }
                updateSlider();
            }

            function prevSlide() {
                if (index > 0) {
                    index--;
                } else {
                    index = totalSlides - slidesToShow;
                }
                updateSlider();
            }

            next.addEventListener("click", nextSlide);
            prev.addEventListener("click", prevSlide);

            // Auto-play
            let autoSlide = setInterval(nextSlide, 3000);

            // Pause autoplay on hover
            slider.addEventListener("mouseenter", () => clearInterval(autoSlide));
            slider.addEventListener("mouseleave", () => autoSlide = setInterval(nextSlide, 3000));

            // Adjust dynamically for screen size changes
            window.addEventListener("resize", () => {
                slidesToShow = window.innerWidth < 640 ? 1 : 2;
                index = 0; // Reset index for smooth transition
                updateSlider();
            });

            updateSlider(); // Initial call
        });
    </script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const slider = document.getElementById("slider");
            const slides = Array.from(document.querySelectorAll("#slider > div"));
            const prevBtn = document.getElementById("prev");
            const nextBtn = document.getElementById("next");
    
            let index = 1; // Start at first actual slide
            const slideWidth = slides[0].offsetWidth;
    
            // Clone first and last slides
            const firstClone = slides[0].cloneNode(true);
            const lastClone = slides[slides.length - 1].cloneNode(true);
    
            slider.appendChild(firstClone);
            slider.insertBefore(lastClone, slides[0]);
    
            const allSlides = Array.from(document.querySelectorAll("#slider > div")); // Update slides list
            slider.style.transform = `translateX(-${index * slideWidth}px)`;
    
            function updateSlider() {
                slider.style.transition = "transform 0.5s ease-in-out";
                slider.style.transform = `translateX(-${index * slideWidth}px)`;
            }
    
            function nextSlide() {
                if (index >= allSlides.length - 1) return;
                index++;
                updateSlider();
    
                // If reaching the cloned first slide, reset to first real slide
                if (index === allSlides.length - 1) {
                    setTimeout(() => {
                        slider.style.transition = "none";
                        index = 1;
                        slider.style.transform = `translateX(-${index * slideWidth}px)`;
                    }, 500);
                }
            }
    
            function prevSlide() {
                if (index <= 0) return;
                index--;
                updateSlider();
    
                // If reaching the cloned last slide, reset to last real slide
                if (index === 0) {
                    setTimeout(() => {
                        slider.style.transition = "none";
                        index = allSlides.length - 2;
                        slider.style.transform = `translateX(-${index * slideWidth}px)`;
                    }, 500);
                }
            }
    
            // Auto-slide every 3 seconds
            let autoSlide = setInterval(nextSlide, 3000);
    
            function stopAutoSlide() {
                clearInterval(autoSlide);
            }
    
            function startAutoSlide() {
                autoSlide = setInterval(nextSlide, 3000);
            }
    
            // Event Listeners
            nextBtn.addEventListener("click", nextSlide);
            prevBtn.addEventListener("click", prevSlide);
            slider.addEventListener("mouseenter", stopAutoSlide);
            slider.addEventListener("mouseleave", startAutoSlide);
    
            // Adjust on resize
            window.addEventListener("resize", () => {
                slider.style.transition = "none";
                slider.style.transform = `translateX(-${index * slides[0].offsetWidth}px)`;
            });
        });
    </script>
    


    {{-- news and letters script --}}
    <script>
        let currentIndex = 0;
        const newsItems = document.querySelectorAll('.news-item');

        function showSlide(index) {
            newsItems.forEach((item, i) => {
                item.style.transform = `translateY(${(i - index) * 100}%)`;
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % newsItems.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + newsItems.length) % newsItems.length;
            showSlide(currentIndex);
        }

        showSlide(currentIndex);
    </script>

    {{-- banner script --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector("#carousel");
            const slides = carousel.querySelectorAll("[data-carousel-item]");
            const prevButton = carousel.querySelector("[data-carousel-prev]");
            const nextButton = carousel.querySelector("[data-carousel-next]");
            const indicators = carousel.querySelectorAll("[aria-label^='Go to slide']");
            let currentIndex = 0;
            let interval;

            function updateCarousel(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("hidden", i !== index);
                });
                indicators.forEach((dot, i) => {
                    dot.classList.toggle("bg-gray-400", i === index);
                    dot.classList.toggle("bg-gray-300", i !== index);
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                updateCarousel(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateCarousel(currentIndex);
            }

            function goToSlide(index) {
                currentIndex = index;
                updateCarousel(currentIndex);
            }

            function startAutoSlide() {
                interval = setInterval(nextSlide, 5000);
            }

            function stopAutoSlide() {
                clearInterval(interval);
            }

            // Event Listeners
            nextButton.addEventListener("click", () => {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            prevButton.addEventListener("click", () => {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            indicators.forEach((dot, index) => {
                dot.addEventListener("click", () => {
                    goToSlide(index);
                    stopAutoSlide();
                    startAutoSlide();
                });
            });

            // Initialize
            updateCarousel(currentIndex);
            startAutoSlide();
        });
    </script>
@endsection
