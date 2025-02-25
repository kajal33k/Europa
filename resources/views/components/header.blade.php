<!-- Top Bar -->
<div
    class="bg-gray-700 text-white py-2 px-2 md:px-12 lg:px-24 flex flex-col md:flex-row items-center justify-between text-center md:text-left">
    <!-- Email -->
    <div class="text-sm mb-1 md:mb-0">
        <a href="mailto:info@europaolympiad.org" class="hover:text-gray-400">info@europaolympiad.org</a>
    </div>

    <!-- Phone Number -->
    <div class="text-sm mb-1 md:mb-0">
        <a href="tel:+919170032441" class="hover:text-gray-400">+91 9170032441 /</a>
        <a href="tel:+918787286010" class="hover:text-gray-400">8787286010</a>

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

<nav class="bg-white text-black p-4">
    <div class="container mx-auto flex justify-between md:justify-evenly items-center">
        <a href="{{ route('index') }}" class="text-2xl font-bold">
            <img src="{{ asset('asset/img/logo.jpg') }}" alt="" class="h-12 md:w-80 w-44 py-2">
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
            <li><a href="{{ route('about') }}" class="hover:text-gray-300">About us</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-gray-300">Contact</a></li>
            {{-- <li><a href="#" class="hover:text-gray-300">Register</a></li> --}}

            <li onclick="togglePopup()" class=" text-black  rounded">Registration</li>
            {{-- 
            <script>
                function togglePopup() {
                    document.getElementById("popup").classList.toggle("hidden");
                }

                function validateForm(event) {
                    event.preventDefault();
                    let name = document.getElementById("name").value;
                    let email = document.getElementById("email").value;
                    let country = document.getElementById("country").value;
                    let sport = document.getElementById("sport").value;
                    let age = document.getElementById("age").value;
                    let gender = document.getElementById("gender").value;
                    let phone = document.getElementById("phone").value;
                    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (!name) {
                        alert("Name is required");
                        return;
                    }
                    if (!email || !emailRegex.test(email)) {
                        alert("Valid email is required");
                        return;
                    }
                    if (!country) {
                        alert("Country is required");
                        return;
                    }
                    if (!sport) {
                        alert("Sport is required");
                        return;
                    }
                    if (!age || isNaN(age) || age <= 0) {
                        alert("Valid age is required");
                        return;
                    }
                    if (!gender) {
                        alert("Gender selection is required");
                        return;
                    }
                    if (!phone || phone.length < 10) {
                        alert("Valid phone number is required");
                        return;
                    }

                    alert("Registration Successful");
                    togglePopup();
                }
            </script> --}}
            <script>
                function togglePopup() {
                    const popup = document.getElementById("popup");
                    popup.classList.toggle("hidden");
                    document.body.classList.toggle("overflow-hidden"); // Prevent background scrolling
                }

                function validateForm(event) {
                    event.preventDefault();

                    let name = document.getElementById("name").value.trim();
                    let email = document.getElementById("email").value.trim();
                    let country = document.getElementById("country").value.trim();
                    let sport = document.getElementById("sport").value.trim();
                    let age = document.getElementById("age").value.trim();
                    let gender = document.getElementById("gender").value;
                    let phone = document.getElementById("phone").value.trim();
                    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (!name) {
                        alert("Name is required");
                        return;
                    }
                    if (!email || !emailRegex.test(email)) {
                        alert("Valid email is required");
                        return;
                    }
                    if (!country) {
                        alert("Country is required");
                        return;
                    }
                    if (!sport) {
                        alert("Sport is required");
                        return;
                    }
                    if (!age || isNaN(age) || age <= 0) {
                        alert("Valid age is required");
                        return;
                    }
                    if (!gender) {
                        alert("Gender selection is required");
                        return;
                    }
                    if (!phone || phone.length < 10) {
                        alert("Valid phone number is required");
                        return;
                    }

                    alert("Registration Successful");
                    togglePopup(); // Close popup after successful validation
                }
            </script>


            <div id="popup"
                class="fixed inset-0 bg-black/50 backdrop-blur-sm flex justify-center items-center hidden z-50 px-4">
                <div class="bg-white p-4 sm:p-6 rounded-lg max-w-5xl w-full shadow-lg">
                    <h2 class="text-xl font-bold mb-4 text-center">Registration</h2>

                    <form action="#" method="POST"
                        class="mt-6 bg-white p-2 rounded-lg shadow-md border border-red-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-gray-700 font-medium">Your Name</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="Full Name" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">Email ID</label>
                                <input type="email"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="Email ID" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">Contact Number</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="Contact Number" required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">Principal Name</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="Full Name">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">Principal Mobile Number</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="Contact Number">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">Principal Email ID</label>
                                <input type="email"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="Email ID">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">School Name</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="School Name">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">School Address</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="School Address">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">School City</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="School City">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">School State</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="School State">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">School Pincode</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="School Pincode">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium">Your Country</label>
                                <input type="text"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                    placeholder="Your Country">
                            </div>
                        </div>

                        {{-- <button type="submit"
                            class="mt-6 bg-red-600 text-white py-3 px-6 w-full rounded-lg font-bold text-lg hover:bg-red-700 transition duration-300 ease-in-out shadow-lg">
                            Submit Inquiry
                        </button> --}}
                        <div class="flex flex-col sm:flex-row gap-2 sm:justify-between">
                            <button type="submit"
                                class="w-full sm:w-auto border border-green-500 hover:bg-green-200 text-green-500 px-4 py-2 rounded">Submit</button>
                            <button type="button" onclick="togglePopup()"
                                class="w-full sm:w-auto border border-red-500 text-red-500 hover:bg-red-200 px-4 py-2 rounded">Close</button>
                        </div>
                    </form>
                </div>
            </div>


        </ul>
    </div>
    {{-- mobile menu --}}
    <ul class="hidden md:hidden space-y-2 top-0 left-0 w-full bg-white  z-50" id="mobile-menu">
        <li><a href="{{ route('index') }}" class="block py-2 hover:text-gray-300">Home</a></li>
        <li class="relative">
            <button id="mobile-dropdown-btn" class="flex items-center gap-2 hover:text-gray-300"><a
                    href="#">Europa IGKO</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <ul class="hidden mt-2 space-y-2 pl-4" id="mobile-dropdown">
                <li><a href="{{ route('euroigko') }}" class="block py-2 hover:text-gray-300">IGKO Exam</a></li>
                <li><a href="{{ route('class_1') }}" class="block py-2 hover:text-gray-300">Class 1</a></li>
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
        <li><a href="{{ route('about') }}" class="block py-2 hover:text-gray-300">About us</a></li>
        <li><a href="{{ route('contact') }}" class="block py-2 hover:text-gray-300">Contact</a></li>
        <!-- Register Button -->
        <li onclick="toggleMobilePopup()" class="block py-2 hover:text-gray-300 cursor-pointer">Register</li>

        <!-- Mobile-Only Popup Modal -->
        <div id="mobilePopup"
            class="fixed inset-0 bg-black/50 backdrop-blur-sm flex justify-center items-center hidden z-50 px-4 sm:hidden mobile-modal">
            <div class="bg-white p-4 rounded-lg h-full max-w-sm w-full shadow-lg my-12 overflow-scroll">
                <h2 class="text-xl font-bold mb-4 text-center">Registration</h2>

                <form action="#" method="POST"
                    class="mt-6 bg-white p-2 h-auto rounded-lg shadow-md border border-red-200 overflow-y-scroll">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-gray-700 font-medium">Your Name</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Full Name" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Email ID</label>
                            <input type="email"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Email ID" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Contact Number</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Contact Number" required>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Principal Name</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Full Name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Principal Mobile Number</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Contact Number">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Principal Email ID</label>
                            <input type="email"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Email ID">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School Name</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School Name">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School Address</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School Address">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School City</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School City">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School State</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School State">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">School Pincode</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="School Pincode">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Your Country</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-500"
                                placeholder="Your Country">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <button type="submit"
                            class="w-full border border-green-500 hover:bg-green-200 text-green-500 px-4 py-2 rounded mobile-btn">Submit</button>
                        <button type="button" onclick="toggleMobilePopup()"
                            class="w-full border border-red-500 text-red-500 hover:bg-red-200 px-4 py-2 rounded mobile-btn">Close</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- JavaScript for Toggling the Mobile Popup -->
        <script>
            function toggleMobilePopup() {
                const mobilePopup = document.getElementById('mobilePopup');
                mobilePopup.classList.toggle('hidden');
                document.body.classList.toggle('overflow-hidden'); // Prevent scrolling when modal is open
            }
        </script>


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


{{-- pop up registration --}}
<script>
    function togglePopup() {
        document.getElementById("popup").classList.toggle("hidden");
    }

    function validateForm(event) {
        event.preventDefault();
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let country = document.getElementById("country").value;
        let sport = document.getElementById("sport").value;
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!name) {
            alert("Name is required");
            return;
        }
        if (!email || !emailRegex.test(email)) {
            alert("Valid email is required");
            return;
        }
        if (!country) {
            alert("Country is required");
            return;
        }
        if (!sport) {
            alert("Sport is required");
            return;
        }

        alert("Registration Successful");
        togglePopup();
    }
</script>
