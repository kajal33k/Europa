<!-- Top Bar -->
<div
    class="bg-gray-700 text-white py-2 px-6 md:px-12 lg:px-24 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
    <!-- Email -->
    <div class="text-sm mb-2 md:mb-0">
        <a href="mailto:info@europaolympiad.org" class="hover:text-gray-400">info@europaolympiad.org</a>
    </div>

    <!-- Phone Number -->
    <div class="text-sm mb-2 md:mb-0">
        <a href="tel:+919170032441" class="hover:text-gray-400">+91 9170032441 / 8787286010</a>
    </div>

    <!-- Social Media Icons -->
    <div class="flex space-x-4">
        <a href="#" class="hover:text-gray-400">
            <i class="ri-whatsapp-fill text-lg"></i>
        </a>
        <a href="https://europaolympiad.com/gallery/" class="hover:text-gray-400">
            <i class="ri-facebook-fill text-lg"></i>
        </a>
        <a href="#" class="hover:text-gray-400">
            <i class="ri-instagram-line text-lg"></i>
        </a>
        <a href="#" class="hover:text-gray-400">
            <i class="ri-twitter-line text-lg"></i>
        </a>
    </div>
</div>


{{-- NAVBAR --}}

<nav class="bg-gray-50 text-black p-4">
    <div class="container mx-auto flex justify-evenly items-center">
        <a href="#" class="text-2xl font-bold">
            <img src="{{ asset('asset/img/logo.jpg') }}" alt="" class="h-12 w-90">
        </a>
        <button id="menu-btn" class="md:hidden focus:outline-none">
            <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <ul class="hidden md:flex gap-6" id="menu">
            <li><a href="{{ route('index') }}" class="hover:text-gray-300">Home</a></li>
            <li class="relative">
                <button id="dropdown-btn" class="flex items-center hover:text-gray-300">Europa IGKO
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul class="hidden absolute left-0 mt-2 w-48 bg-white text-black shadow-md rounded-md z-10"
                    id="dropdown">
                    <li><a href="{{ route('euroigko') }}" class="block px-4 py-2 hover:bg-gray-200">IGKO Exam</a></li>
                    <li><a href="{{ route('class_1') }}" class="block px-4 py-2 hover:bg-gray-200">Class 1</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 2</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 3</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 4</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 5</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 6</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 7</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 8</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 9</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 10</a></li>

                </ul>
            </li>
            <li class="relative">
                <button id="dropdown-btn" class="flex items-center hover:text-gray-300">Europa IAO
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul class="hidden absolute left-0 mt-2 w-48 bg-white text-black shadow-md rounded-md z-10"
                    id="dropdown">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">IAO Exam</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 1</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 2</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 3</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 4</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 5</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 6</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 7</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 8</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 9</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 10</a></li>

                </ul>
            </li>
            <li class="relative">
                <button id="dropdown-btn" class="flex items-center hover:text-gray-300">Europa ISO
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <ul class="hidden absolute left-0 mt-2 w-48 bg-white text-black shadow-md rounded-md z-10"
                    id="dropdown">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">ISO Exam </a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 1</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 2</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 3</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 4</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 5</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 6</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 7</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 8</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 9</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 10</a></li>

                </ul>
            </li>
            <li class="relative">
                <button id="dropdown-btn" class="flex items-center hover:text-gray-300">Europa IMO
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <ul class="hidden absolute left-0 mt-2 w-48 bg-white text-black shadow-md rounded-md z-10"
                    id="dropdown">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">IMO Exam </a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 1</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 2</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 3</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 4</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 5</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 6</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 7</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 8</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 9</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-200">Class 10</a></li>

                </ul>
            </li>
            <li><a href="#" class="hover:text-gray-300">About us</a></li>
            <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            <li><a href="#" class="hover:text-gray-300">Register</a></li>

        </ul>
    </div>
    {{-- mobile menu --}}
    <ul class="hidden md:hidden mt-4 space-y-2" id="mobile-menu">
        <li><a href="{{ route('index') }}" class="block py-2 hover:text-gray-300">Home</a></li>
        <li class="relative">
            <button id="mobile-dropdown-btn" class="flex items-center gap-2 hover:text-gray-300"><a
                    href="{{ route('euroigko') }}">Europa IGKO</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <ul class="hidden mt-2 space-y-2 pl-4" id="mobile-dropdown">
                <li><a href="{{ route('class_1') }}" class="block py-2 hover:text-gray-300">IGKO Exam</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 1</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 2</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 3</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 4</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 5</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 6</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 7</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 8</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 9</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 10</a></li>
            </ul>
        </li>
        <li class="relative">
            <button id="mobile-dropdown-btn" class="flex items-center gap-2 hover:text-gray-300">Europa IAO
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <ul class="hidden mt-2 space-y-2 pl-4" id="mobile-dropdown">
                <li><a href="#" class="block py-2 hover:text-gray-300">IAO Exam</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 1</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 2</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 3</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 4</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 5</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 6</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 7</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 8</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 9</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 10</a></li>
            </ul>
        </li>
        <li class="relative">
            <button id="mobile-dropdown-btn" class="flex items-center gap-2 hover:text-gray-300">Europa ISO
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <ul class="hidden mt-2 space-y-2 pl-4" id="mobile-dropdown">
                <li><a href="#" class="block py-2 hover:text-gray-300">ISO Exam</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 1</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 2</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 3</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 4</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 5</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 6</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 7</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 8</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 9</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 10</a></li>
            </ul>
        </li>
        <li class="relative">
            <button id="mobile-dropdown-btn" class="flex items-center gap-2 hover:text-gray-300">Europa IMO
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <ul class="hidden mt-2 space-y-2 pl-4" id="mobile-dropdown">
                <li><a href="#" class="block py-2 hover:text-gray-300">IMO Exam</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 1</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 2</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 3</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 4</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 5</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 6</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 7</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 8</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">Class 9</a></li>
                <li><a href="#" class="block py-2 hover:text-gray-300">class 10</a></li>

            </ul>
        </li>
        <li><a href="#" class="block py-2 hover:text-gray-300">About us</a></li>
        <li><a href="#" class="block py-2 hover:text-gray-300">Contact</a></li>
        <li><a href="#" class="block py-2 hover:text-gray-300">Register</a></li>

    </ul>
</nav>

<script>
    document.getElementById("menu-btn").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });

    // Mobile Dropdown Toggle
    document.querySelectorAll(".mobile-dropdown-btn").forEach((btn, index) => {
        btn.addEventListener("click", () => {
            document.querySelectorAll(".mobile-dropdown")[index].classList.toggle("hidden");
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButtons = document.querySelectorAll("[id='dropdown-btn']");

        dropdownButtons.forEach(button => {
            button.addEventListener("click", function(event) {
                event.stopPropagation();
                const dropdown = this.nextElementSibling;

                // Close other open dropdowns
                document.querySelectorAll("ul[id='dropdown']").forEach(menu => {
                    if (menu !== dropdown) {
                        menu.classList.add("hidden");
                    }
                });

                // Toggle current dropdown
                dropdown.classList.toggle("hidden");
            });
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", function() {
            document.querySelectorAll("ul[id='dropdown']").forEach(menu => {
                menu.classList.add("hidden");
            });
        });

        // Prevent closing when clicking inside dropdown
        document.querySelectorAll("ul[id='dropdown']").forEach(dropdown => {
            dropdown.addEventListener("click", function(event) {
                event.stopPropagation();
            });
        });

        // Ensure dropdowns work on mobile
        document.addEventListener("touchstart", function() {
            document.querySelectorAll("ul[id='dropdown']").forEach(menu => {
                menu.classList.add("hidden");
            });
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButtons = document.querySelectorAll("[id='mobile-dropdown-btn']");

        dropdownButtons.forEach(button => {
            button.addEventListener("click", function(event) {
                event.stopPropagation();
                const dropdown = this.nextElementSibling;

                // Close other open dropdowns
                document.querySelectorAll("ul[id='mobile-dropdown']").forEach(menu => {
                    if (menu !== dropdown) {
                        menu.classList.add("hidden");
                    }
                });

                // Toggle current dropdown
                dropdown.classList.toggle("hidden");
            });
        });
        const dropdownIcon = dropdownBtn.querySelector("svg");
        // Close dropdown when clicking outside
        document.addEventListener("click", function() {
            document.querySelectorAll("ul[id='dropdown']").forEach(menu => {
                menu.classList.add("hidden");
            });
        });

        // Prevent closing when clicking inside dropdown
        document.querySelectorAll("ul[id='dropdown']").forEach(dropdown => {
            dropdown.addEventListener("click", function(event) {
                event.stopPropagation();
            });
        });

        // Ensure dropdowns work on mobile
        document.addEventListener("touchstart", function() {
            document.querySelectorAll("ul[id='dropdown']").forEach(menu => {
                menu.classList.add("hidden");
            });
        });
    });
</script>
