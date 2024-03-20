<?php
    //MESSAGE OF INSCRIPTION
    session_start();
    if (isset ($_SESSION['messageSignValidation'])) {
        echo "{$_SESSION['messageSignValidation']}";
        unset($_SESSION["messageSignValidation"]);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification requise | CVThèque</title>
    <link rel="stylesheet" href="../stylesheets/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body> 
    <main>
        <div class="flex items-center justify-center self-center h-full">
        <div>
        <h1 class="absolute top-4 text-center">Authentification requise</h1>
            <div class="col-span-1 min-w-[300px]">
                <form class="max-w-sm mx-auto" method="POST" action="../controller/signIn.php">
                <h2 class="text-center mb-5">Se connecter</h2>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse email</label>
                        <input type="email" id="email" name="mail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="exemple@exemple.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de passe</label>
                        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                    </div>
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm min-w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Se connecter</button>
                </form>
            </div>
            <hr class="my-5">
            <a href="formSignUp.php" type="button" class="py-2.5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Créer un compte</a>
        </div>
        </div>
    </main>
</body>
</html>