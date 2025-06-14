<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>

    <div class="bg-gradient-to-r from-indigo-200 via-purple-500 to-pink-200 shadow-inner mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col sm:flex-row justify-between items-center text-gray-700">
                <div class="mb-4 sm:mb-0">
                    &copy; <?php echo date("Y"); ?> ContentSphere. All rights reserved.
                </div>
                <div class="flex space-x-6">
                    <a href="./index.php" class="hover:text-indigo-600 font-medium">Home</a>
                    <a href="./about.php" class="hover:text-indigo-600 font-medium">About</a>
                    <a href="./contact.php" class="hover:text-indigo-600 font-medium">Contact</a>
                    <a href="./privacy.php" class="hover:text-indigo-600 font-medium">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>