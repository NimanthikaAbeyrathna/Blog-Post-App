<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContentSphere</title>
    <link rel="icon" type="image/png" href="./images/favicon.png" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
<?php include "nav.php"  ?>
<?php
    if(isset($_POST['submit'])){

        $title = $_POST["title"];
        $date = $_POST["date"];
        $areaOfStudy = $_POST["areaOfStudy"];
        $autherName = $_POST["autherName"];
        $aboutAuther = $_POST["aboutAuther"];
        $content = $_POST["content"];
        

        $uploadDir = "uploads/";
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        $profilePictureName = $_FILES["profilePicture"]["name"];
        $articleImageName = $_FILES["articleImage"]["name"];

        move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $uploadDir . $profilePictureName);
        move_uploaded_file($_FILES["articleImage"]["tmp_name"], $uploadDir . $articleImageName);

    }
?>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-4xl font-bold bg-gradient-to-r from-indigo-200 via-purple-500 to-pink-200 bg-clip-text text-transparent">Welcome to Content Sphere</h2>
                <p class="mt-2 text-lg/8 text-gray-600">Your hub for fresh, insightful articles and creative ideas. Dive in to explore 
                    stories, tips, and inspiration crafted just for you. Stay curious, stay inspired!.
                </p>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 ">
                
                <article class="flex max-w-xl flex-col items-start justify-between bg-gradient-to-r from-indigo-200 via-purple-500 to-pink-200 shadow-md p-10">
                    <div class="flex items-center gap-x-4 text-xs">
                        <div class="text-gray-500"><?php echo  $date ?></div>
                        <div class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100"><?php echo  $areaOfStudy ?></div>
                    </div>
                    <div class="p-5">
                        <img src="<?= $uploadDir . $articleImageName ?>" alt="" class="w-50 h-50">
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                            <span class="absolute inset-0"></span>
                            <?php echo  $title ?>
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600"><?php echo  $content ?></p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="<?= $uploadDir . $profilePictureName ?>" alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                <?php echo  $autherName ?>
                            </a>
                            </p>
                            <p class="text-gray-600"><?php echo  $aboutAuther ?></p>
                        </div>
                    </div>
                </article>

           
            </div>
        </div>
    </div>

<?php include "footer.php"  ?>   
</body>
</html>