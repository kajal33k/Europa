@extends('components.main')
@section('content')

<header class="bg-red-700 text-white py-6">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-center px-4 gap-8">
        <h1 class="text-2xl md:text-5xl font-bold text-center md:text-left">
            Europa International<br>
            General Knowledge Olympiad (EIGKO)
        </h1>
        <img src="{{ asset('asset/img/globe.png') }}" alt="Globe" class="h-auto w-auto ">
    </div>
</header>
<section class="bg-gray-100 py-10">
    <div class="container mx-auto px-4 md:px-8">
      
        <p class="text-lg leading-relaxed">
            The Europa International General Knowledge Olympiad (EIGKO) is an international competitive exam held for students in Grades 1 - 10. 
            There will be 2 levels for students of all Grades 1 - 10. The exam is an objective-type test that students need to complete in 60 minutes.
        </p>

        <h3 class="text-2xl font-semibold text-gray-800 mt-6">Other Important Information:</h3>
        <ul class="list-disc pl-5 space-y-2 text-lg">
            <li>There are separate question papers for each and every class.</li>
            <li>The medium of the exam is Hindi & English.</li>
            <li>The syllabus of various international boards is followed for the setting of test papers.</li>
            <li>The online exams are conducted on web-enabled devices like laptops, tablets, or desktops with webcams. Mobile devices are not allowed.</li>
            <li>For students of Grades 1 and 2, the parent/teacher can assist the child in guiding through the questions.</li>
        </ul>

        <h3 class="text-2xl font-semibold text-gray-800 mt-6">EIGKO Highlights</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-lg">
            <p><strong>Conducted for grades:</strong> 1 to 10</p>
            <p><strong>Mode of examination:</strong> Offline</p>
            <p><strong>Mode of registration:</strong> Through schools</p>
            <p><strong>EIGKO exam duration:</strong> 60 minutes</p>
            <p><strong>Type of questions:</strong> Multiple Choice Questions (MCQs)</p>
            <p><strong>Levels of examination:</strong> 1 level</p>
        </div>

        <p class="text-lg leading-relaxed mt-6">
            Europa International General Knowledge Olympiad (EIGKO) is popularly known by students globally for serving exceptional quality 
            questions, and the exam is held annually.
        </p>
    </div>
</section>
<section class="bg-white py-10">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-red-700 mb-6 text-center">
            Why Europa International General Knowledge Olympiad?
        </h2>

        <!-- Reasons to Participate -->
        <ul class="list-decimal pl-5 space-y-2 text-lg text-gray-800">
            <li>By participating in the Europa General Knowledge Olympiad, children gain exposure to new skills such as reasoning, analytical, and problem-solving abilities.</li>
            <li>Europa International Olympiad helps students understand concepts deeply, moving beyond conventional rote learning.</li>
            <li>Facing new challenges in a competitive environment enhances students' confidence and prepares them for future competitions.</li>
        </ul>

        <!-- Syllabus & Exam Pattern Section -->
        <h2 class="text-3xl font-bold text-red-700 mt-10 mb-6 text-center">
            Syllabus & Exam Pattern for Europa General Knowledge Olympiad
        </h2>
        <p class="text-lg leading-relaxed text-gray-800">
            The Europa International General Knowledge Olympiad provides a platform for students to showcase their talent in Science and Technology. 
            The exam helps children prepare for national and international competitions. The marking scheme varies based on the class.
        </p>

        <!-- Exam Pattern Table -->
        <div class="overflow-x-auto mt-6">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="border border-gray-300 px-4 py-2 text-lg">Grade</th>
                        <th class="border border-gray-300 px-4 py-2 text-lg">Number of Questions</th>
                        <th class="border border-gray-300 px-4 py-2 text-lg">Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="border border-gray-300 px-4 py-2">Grade 1 - 2</td>
                        <td class="border border-gray-300 px-4 py-2">35</td>
                        <td class="border border-gray-300 px-4 py-2">60 minutes</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">Grade 3 - 5</td>
                        <td class="border border-gray-300 px-4 py-2">40</td>
                        <td class="border border-gray-300 px-4 py-2">60 minutes</td>
                    </tr>
                    <tr class="bg-white">
                        <td class="border border-gray-300 px-4 py-2">Grade 6 - 10</td>
                        <td class="border border-gray-300 px-4 py-2">50</td>
                        <td class="border border-gray-300 px-4 py-2">60 minutes</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Exam Fee Information -->
        <p class="text-lg leading-relaxed text-gray-800 mt-6">
            The exam fee is <strong>INR 150</strong> for students enrolling from India. For students residing outside of India, the fee is country-specific.
        </p>
    </div>
</section>
<section class="bg-white py-10">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-red-700 mb-6 text-center">
            How to Prepare for EIGKO Exam
        </h2>
        <p class="text-lg text-gray-800 leading-relaxed text-center">
            Preparing for the Europa International General Knowledge Olympiad (EIGKO) requires a well-rounded approach focusing on a variety of topics. 
            Here’s a step-by-step guide to help you prepare effectively.
        </p>

        <!-- Preparation Steps -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
            <!-- Syllabus Section -->
            <div>
                <h3 class="text-2xl font-semibold text-red-600 mb-4">Understand the Syllabus</h3>
                <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                    <li><strong>Current Affairs:</strong> Stay updated with national and international news, sports, politics, economics, and science.</li>
                    <li><strong>General Knowledge:</strong> Cover topics like history, geography, literature, and important discoveries.</li>
                    <li><strong>Science & Technology:</strong> Learn about basic principles and recent advancements.</li>
                    <li><strong>Environment:</strong> Understand key environmental issues and conservation efforts.</li>
                    <li><strong>Literature & Art:</strong> Familiarize yourself with famous books, authors, and artists.</li>
                    <li><strong>Social Studies:</strong> Cover civics, economics, and social issues.</li>
                </ul>
            </div>

            <!-- Study Materials -->
            <div>
                <h3 class="text-2xl font-semibold text-red-600 mb-4">Study Materials & Resources</h3>
                <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                    <li><strong>Books:</strong> Use Olympiad-specific books like the Europa Olympiad IGKO Book.</li>
                    <li><strong>Magazines & Newspapers:</strong> Read them regularly to stay updated.</li>
                    <li><strong>Online Resources:</strong> Utilize educational websites and Olympiad trainer platforms.</li>
                    <li><strong>Educational Apps:</strong> Use mobile apps focused on general knowledge and current affairs.</li>
                </ul>
            </div>
        </div>

        <!-- Practice and Revision -->
        <div class="mt-10">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Practice & Revision</h3>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                <li><strong>Mock Tests:</strong> Regularly take sample papers to get familiar with the exam pattern and manage time effectively.</li>
                <li><strong>Quiz Competitions:</strong> Participate in online quizzes to test knowledge and improve recall speed.</li>
                <li><strong>Flashcards:</strong> Create flashcards for quick revision of key facts.</li>
                <li><strong>Discussion Groups:</strong> Join study groups or online forums to exchange ideas and different perspectives.</li>
            </ul>
        </div>

        <!-- Time Management -->
        <div class="mt-10">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Time Management</h3>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                <li><strong>Study Schedule:</strong> Allocate time for each subject to ensure complete coverage.</li>
                <li><strong>Daily Updates:</strong> Spend at least 30 minutes daily reading current affairs.</li>
                <li><strong>Regular Revision:</strong> Review topics frequently to retain information better.</li>
            </ul>
        </div>

        <!-- Exam Strategy -->
        <div class="mt-10">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Exam Strategy</h3>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                <li><strong>Read Questions Carefully:</strong> Understand the question before answering.</li>
                <li><strong>Time Management:</strong> Allocate time wisely for different sections.</li>
                <li><strong>Accuracy Over Speed:</strong> Avoid mistakes such as filling the wrong answer bubble.</li>
                <li><strong>Stay Calm:</strong> Remain composed to think clearly during the exam.</li>
            </ul>
        </div>

        <!-- Healthy Habits -->
        <div class="mt-10 bg-gray-100 p-6 rounded-lg">
            <h3 class="text-2xl font-semibold text-red-600 mb-4">Healthy Habits for Exam Success</h3>
            <ul class="list-disc pl-5 space-y-2 text-lg text-gray-800">
                <li><strong>Balanced Diet:</strong> Eat nutritious meals to maintain focus and energy.</li>
                <li><strong>Adequate Sleep:</strong> Get enough sleep to keep your mind sharp.</li>
                <li><strong>Exercise:</strong> Engage in physical activities to reduce stress and improve concentration.</li>
            </ul>
        </div>

        <!-- Closing Note -->
        <p class="text-lg text-gray-800 leading-relaxed mt-6">
            By following this comprehensive preparation plan, you can maximize your chances of performing well in the 
            <strong>Europa International General Knowledge Olympiad Examination.</strong>
        </p>
    </div>
</section>
<section class="bg-white py-10">
    <div class="container mx-auto px-4 md:px-8">
        <!-- Section Title -->
        <h2 class="text-3xl font-bold text-red-700 mb-6 text-center">
            Olympiad Awards
        </h2>
        <p class="text-lg text-gray-800 leading-relaxed text-center">
            The Europa Olympiads awards and recognition offered to students are as follows:
        </p>

        <!-- Award Highlights -->
        <div class="mt-8 space-y-4">
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🏆</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>50% of top scorers receive prizes.</strong>
                </p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🥇</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>International Rank (Top 3):</strong> International Trophy + Special Medal + Gift + Special Certificate.
                </p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🥈</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>National Rank (Top 3):</strong> International Trophy + Special Medal + Special Certificate.
                </p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🏅</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>Zonal Topper:</strong> Trophy + Medal + Certificate.
                </p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🥉</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>City Topper:</strong> Trophy + Medal + Certificate.
                </p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🏅</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>Best Performer of the School</strong>
                </p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🎖️</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>Excellence Student of the School</strong>
                </p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🏆</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>Class Level:</strong> Top 10% rank holders get Class Topper Medals.
                </p>
            </div>
            <div class="bg-gray-100 p-4 rounded-lg flex items-center">
                <span class="text-xl font-semibold text-red-600">🎖️</span>
                <p class="text-lg text-gray-800 ml-3">
                    <strong>Section Level:</strong> Top 20% rank holders in a section.
                </p>
            </div>
        </div>

        <!-- Class-wise Olympiad Information -->
        <div class="mt-10">
            <h3 class="text-2xl font-semibold text-red-600 mb-4 text-center">
                Explore Class-wise General Knowledge Olympiad
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 1
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 2
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 3
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 4
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 5
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 6
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 7
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 8
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 9
                </a>
                <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-lg text-center text-lg font-medium text-gray-700">
                    Class 10
                </a>
            </div>
        </div>
    </div>
</section>

    
   

 
@endsection