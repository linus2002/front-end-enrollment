<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <div class="flex">
        <!-- Sidebar -->
        <div
            class="w-[8rem] bg-primary text-white min-h-screen flex flex-col items-center justify-between py-6 rounded-xl">
            <!-- Top Section -->
            <div class="flex flex-col items-center">
                <!-- Logo -->
                <div class="mb-6">
                    <img src="{{ asset('assets/cvsu.svg') }}" alt="Bacoor Logo" class="h-logo w-logo ml-4 mr-4">
                    <p class="text-md mt-2 text-center font-semibold font-poppins">Bacoor</p>

                </div>

                <!-- Icons with Labels -->
                <ul class="space-y-8">
                    <!-- Home Icon -->
                    <li class="flex flex-col items-center group">
                        <img src="{{ asset('assets/dashboard.svg') }}" alt="Bacoor Logo"
                            class="h-icon w-icon ml-4 mr-4 group-hover:scale-110 transition-transform duration-200 ease-in-out">
                        <span
                            class="text-xs mt-1 text-center font-semibold font-poppins group-hover:scale-125 transition-all duration-200 ease-in-out bg-yellow">Home</span>
                    </li>

                    <!-- Users Icon -->
                    <li class="flex flex-col items-center group">
                        <img src="{{ asset('assets/users.svg') }}" alt="Bacoor Logo"
                            class="h-icon w-icon ml-4 mr-4 group-hover:scale-110 transition-transform duration-200 ease-in-out">
                        <span
                            class="text-xs mt-1 text-center font-semibold font-poppins group-hover:scale-125 transition-all duration-200 ease-in-out">Users</span>
                    </li>
                </ul>
            </div>

            <!-- Logout Button -->
            <div class="flex flex-col items-center">
                <button class="flex items-center space-x-2 group"> <!-- Added group class to the button -->
                    <img src="{{ asset('assets/signout.svg') }}" alt="Signout Icon"
                        class="h-icon w-icon group-hover:scale-110 transition-transform duration-200 ease-in-out">
                    <span
                        class="text-xs mt-1 text-center font-semibold font-poppins group-hover:scale-125 transition-all duration-200 ease-in-out">Logout</span>
                </button>
            </div>

        </div>


        <!-- Main Content -->
        <div class="flex-1 bg-light-gray">
            <!-- Header -->
            <header class="bg-light-gray shadow-big p-4">
                <h1 class="text-2xl font-bold">Dashboard</h1>
            </header>

            <!-- Content Area -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>