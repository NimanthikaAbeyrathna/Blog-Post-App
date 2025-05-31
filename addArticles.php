<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add articles</title>
    <link rel="icon" type="image/png" href="./images/favicon.png" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <?php include "nav.php" ?>
    <div class="flex-grow flex items-center justify-center px-4">
        <div class="w-full max-w-2xl  p-8">
        
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Add an Article</h1>
            
            <form action="index.php" method="POST" enctype="multipart/form-data" class="space-y-5">

                <div>
                <label class="block text-gray-700 font-medium mb-1">Article Title</label>
                <input type="text" name="title" class="w-full border border-black rounded-md p-2" required>
                </div>

                <div>
                <label class="block text-gray-700 font-medium mb-1">Date</label>
                <input type="date" name="date" class="w-full border border-black rounded-md p-2" required>
                </div>

                <div>
                <label class="block text-gray-700 font-medium mb-1">Area of Study</label>
                <select name="areaOfStudy" class="w-full border border-black rounded-md p-2" required>
                    <option value="">-- Select --</option>
                    <option value="tech">Technology</option>
                    <option value="lifestyle">Lifestyle</option>
                    <option value="education">Education</option>
                    <option value="health">Health</option>
                </select>
                </div>

                <div>
                <label class="block text-gray-700 font-medium mb-1">Author Name</label>
                <input type="text" name="autherName" class="w-full border border-black rounded-md p-2" required>
                </div>

                <div>
                <label class="block text-gray-700 font-medium mb-1">About Author</label>
                <input type="text" name="aboutAuther" class="w-full border border-black rounded-md p-2" required>
                </div>

                <div>
                <label class="block text-gray-700 font-medium mb-1">Author Profile Picture</label>
                <input type="file" name="profilePicture" accept="image/*" class="w-full border border-black rounded-md p-2" required>
                </div>

                <div>
                <label class="block text-gray-700 font-medium mb-1">Image for Article</label>
                <input type="file" name="articleImage" accept="image/*" class="w-full border border-black rounded-md p-2" required>
                </div>

                <div>
                <label class="block text-gray-700 font-medium mb-1">Content</label>
                <textarea name="content" rows="6" class="w-full border border-black rounded-md p-2 resize-none" required></textarea>
                </div>

                <div class="text-center">
                <input type="submit" name="submit" value="Submit" class="bg-indigo-600 text-white font-medium py-2 px-6 rounded-md hover:bg-indigo-700 transition duration-300 cursor-pointer">
                </div>

            </form>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>