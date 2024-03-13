
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CVThèque</title>
    <link rel="stylesheet" href="stylesheets/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>
    <header class='bg-[#2d3d33] rounded-b-3xl overflow-hidden text-white'>
        <div class='bg-[url("https://assets-global.website-files.com/64e48603c6d16b61230cf754/64ef94c674db03bf2b6fa88a_Banner%20BG-01.svg")] bg-cover min-h-[97.5vh]'>
            <?php include 'components/navbar.php'; ?>
                <div class='flex items-center justify-center'>
                <div class="grid grid-cols-2">
                    <div class="col-span-1 flex flex-col justify-center align-middle mx-auto">
                        <div>
                            <h1 class="text-5xl font-bold">UN CV,<br> UN STAGE</h1>
                            <p class="text-lg my-10">Créer , éditer , publier, Faites de vos CV une simplicité</p>
                            <a href="view/form_signin.php" class="text-[#2d3d33] bg-white rounded-full p-4 font-bold">Commencer</a>
                        </div>
                    </div>
                    <div class="col-span-1">
                    <i data-lucide="volume-2" class="my-class"></i>
                        <img src="https://assets-global.website-files.com/64e48603c6d16b61230cf754/64ef94c674db03bf2b6fa88a_Banner%20BG-01.svg" alt="">
                    </div>
                </div>
                </div>
        </div>
    </header>
    <main class='min-h-screen'>
    </main>
        <?php include 'components/footer.php'; ?>
</body>
</html>