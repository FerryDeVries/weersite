<?php require __DIR__ . '/../backend/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Movie Website</title>
</head>
<body class="flex flex-col min-h-screen">
    <header class="bg-gray-900">
        <!-- Header navigation bar code goes here -->
    </header>

    <!-- Rest of your website content goes here -->

    <footer class="bg-gray-900 mt-auto">
        <div class="container mx-auto py-6">
            <div class="flex flex-col md:flex-row md:justify-between">
                <div class="mb-4 md:mb-0">
                    <span class="ml-4 text-white">Movie Website &copy; <?php echo date('Y'); ?></span>
                </div>
                <div>
                    <ul class="flex space-x-4">
                        <li><a href="#" class="text-white hover:text-gray-300">Privacy Policy</a></li>
                        <li><a href="#" class="text-white hover:text-gray-300">Terms of Service</a></li>
                        <li><a href="#" class="mr-4 text-white hover:text-gray-300">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>