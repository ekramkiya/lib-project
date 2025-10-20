<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libratory MIS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-100 min-h-screen flex items-center justify-center font-[Inter]">

    <div class="text-center px-6 py-12 bg-white/80 backdrop-blur-md shadow-2xl rounded-2xl max-w-lg w-full transition-all hover:shadow-indigo-300">
        <!-- Logo or Icon -->
        <div class="flex justify-center mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6l4 2m-8 2a9 9 0 1118 0 9 9 0 01-18 0z" />
            </svg>
        </div>

        <!-- Title -->
        <h1 class="text-4xl font-extrabold text-indigo-700 mb-3">
            Libratory MIS
        </h1>

        <!-- Subtitle -->
        <p class="text-gray-600 text-base mb-8">
            Manage your library efficiently with our modern management information system.
        </p>

        <!-- Login Button -->
        <a href="{{ route('filament.admin.auth.login') ?? url('/admin/login') }}"
           class="inline-block px-8 py-3 bg-indigo-600 text-white font-semibold rounded-xl shadow-lg hover:bg-indigo-700 hover:shadow-indigo-400 transition duration-300 ease-in-out">
            Login
        </a>
    </div>

</body>
</html>
