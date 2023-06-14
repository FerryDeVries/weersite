<?php require __DIR__ . '/../backend/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Movie Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-gray-900">
        <nav class="container mx-auto flex items-center justify-between py-4">
            <div>
                <a href="#" class="text-xl ml-4 font-bold text-white">Movie Website</a>
            </div>
            <div>
                <ul class="flex space-x-6">
                    <li><a href="#" class="text-white hover:text-gray-300">Home</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">Movies</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">TV Shows</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">Actors</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
                </ul>
            </div>
            <div class="ml-4">
                <form action="#" method="GET">
                    <input type="text" name="search" class="px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search movies">
                    <button type="submit" class="ml-2 mr-4 px-4 py-2 rounded-lg bg-blue-500 text-white">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Rest of your website content goes here -->

</body>
</html>