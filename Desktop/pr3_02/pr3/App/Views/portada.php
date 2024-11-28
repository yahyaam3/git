<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$app_config["app"]["name"]?></title>
    <link rel="stylesheet" href="/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-lg">
        <!-- Title Section -->
        <div class="container mx-auto px-6 py-4 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <img src="/logo.png" alt="Logo" class="h-8 w-8">
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-orange-600 to-orange-400 bg-clip-text text-transparent">
                        TOTMÀQUINA
                    </h1>
                </div>
                <a href="/privat" class="transform transition-all duration-200 hover:scale-105 inline-flex items-center px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-400 text-white font-semibold rounded-lg shadow-md hover:from-orange-600 hover:to-orange-500">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                    </svg>
                    ADMIN
                </a>
            </div>
        </div>
        <!-- Navigation Section -->
        <nav class="container mx-auto px-6 py-4">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                <a href="#users" class="group transition-all duration-200 text-center bg-white border border-gray-200 px-4 py-3 rounded-xl shadow-sm hover:shadow-md hover:border-orange-300 hover:bg-orange-50">
                    <div class="text-gray-700 group-hover:text-orange-600 font-medium">Gestió d'usuaris i rols</div>
                </a>
                <a href="#inventory" class="group transition-all duration-200 text-center bg-white border border-gray-200 px-4 py-3 rounded-xl shadow-sm hover:shadow-md hover:border-orange-300 hover:bg-orange-50">
                    <div class="text-gray-700 group-hover:text-orange-600 font-medium">Gestió d'inventari</div>
                </a>
                <a href="#preventive" class="group transition-all duration-200 text-center bg-white border border-gray-200 px-4 py-3 rounded-xl shadow-sm hover:shadow-md hover:border-orange-300 hover:bg-orange-50">
                    <div class="text-gray-700 group-hover:text-orange-600 font-medium">Manteniments preventius</div>
                </a>
                <a href="#corrective" class="group transition-all duration-200 text-center bg-white border border-gray-200 px-4 py-3 rounded-xl shadow-sm hover:shadow-md hover:border-orange-300 hover:bg-orange-50">
                    <div class="text-gray-700 group-hover:text-orange-600 font-medium">Incidències i correctius</div>
                </a>
                <a href="#history" class="group transition-all duration-200 text-center bg-white border border-gray-200 px-4 py-3 rounded-xl shadow-sm hover:shadow-md hover:border-orange-300 hover:bg-orange-50">
                    <div class="text-gray-700 group-hover:text-orange-600 font-medium">Historial de manteniment</div>
                </a>
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <!-- Primary content area with welcome message and dynamic content -->
    <main class="container mx-auto px-6 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="mb-4 text-xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl">
            </h1>
            <!-- Dynamic message container -->
            <div class="mt-6">
                <p class="text-gray-600"><?= $missatge ?></p>
                <p id="missatge" class="text-gray-600"></p>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <!-- Contains copyright information and footer content -->
    <footer class="bg-gray-800 text-white mt-8">
        <div class="container mx-auto px-6 py-4">
            <p class="text-center">&copy; 2024 Framework Emeset. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript Bundle -->
    <!-- Include main JavaScript functionality -->
    <script src="/js/bundle.js"></script>
</body>
</html>
