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
    <title>S'inscrire</title>
    <link rel="stylesheet" href="../stylesheets/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>
    <div class="flex items-center justify-center self-center h-full">
        <div class="min-w-[300px]">
            <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-white">S'inscrire</h3>
            <!-- Radio Type -->
            <ul class="grid max-w-sm gap-6 md:grid-cols-2 mb-3">
                <li>
                    <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer"
                        required checked data-form="formSignUpStudent" />
                    <label for="hosting-small"
                        class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Élève</div>
                            <div class="w-full">actuellement</div>
                        </div>
                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </label>
                </li>
                <li>
                    <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer"
                        data-form="formSignUpCompany">
                    <label for="hosting-big"
                        class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Entreprise</div>
                            <div class="w-full">avec SIREN</div>
                        </div>
                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </label>
                </li>
            </ul>

            <!-- Student Form -->
            <form action="../controller/signUp.php" id="formSignUpStudent" class="max-w-sm mx-auto" method="post">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prénom</label>
                        <input type="text" id="first_name" name="first_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ex : Tom" required />
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                        <input type="text" id="last_name" name="last_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ex : Holland" required />
                    </div>
                </div>
                <div class="mb-5">
                    <label for="mail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse
                        email</label>
                    <input type="email" id="mail" name="mail"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : tom.holland@sfr.fr" required />
                </div>
                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numéro de
                        téléphone</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : 0122334455" required />
                </div>
                <div class="mb-5">
                    <label for="town" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
                    <input type="text" id="town" name="town"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : Cambrai" required />
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="postcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code
                            Postal</label>
                        <input type="number" id="postcode" name="postcode" pattern="[0-9]{5}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ex : 54720" required />
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="country"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pays</label>
                        <input type="text" id="country" name="country"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ex : France" required />
                    </div>
                </div>

                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de
                        passe</label>
                    <input type="password" id="password" maxlength="24" minlength="8"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : MonM0!DePass3" required />
                </div>
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">J'accepte
                        les <a href="#" class="text-blue-700">conditions d'utilisation</a></label>
                </div>
                <button type="submit" name="submitStudent" value="submitStudent"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Créer
                    un compte élève
                </button>
            </form>

            <!-- Company Form -->
            <form action="../controller/signUp.php" id="formSignUpCompany" class="max-w-sm mx-auto" method="post">
                <div class="mb-5">
                    <label for="companyName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nom de l'entreprise</label>
                    <input type="text" id="companyName" name="companyName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : Paper Incorporation" required />
                </div>
                <div class="mb-5">
                    <label for="siren" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        SIREN</label>
                    <input type="number" id="siren" name="siren" minlength="9"maxlength="9"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : 234567968" required />
                </div>
                <div class="mb-5">
                    <label for="mail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse
                        email</label>
                    <input type="email" id="mail" name="mail"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : entrepise@paper.fr" required />
                </div>
                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numéro de
                        téléphone</label>
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : 0654986735" required />
                </div>
                <div class="mb-5">
                    <label for="town" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
                    <input type="text" id="town" name="town"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : Paris Cedex" required />
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="postcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code
                            Postal</label>
                        <input type="number" id="postcode" name="postcode" pattern="[0-9]{5}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ex : 75001" required />
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="country"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pays</label>
                        <input type="text" id="country" name="country"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Ex : France" required />
                    </div>
                </div>

                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot de
                        passe</label>
                    <input type="password" id="password" maxlength="24" minlength="8"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Ex : ?MonEntrEpr1se!" required />
                </div>
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">J'accepte
                        les <a href="#" class="text-blue-700">conditions d'utilisation</a></label>
                </div>
                <button type="submit" name="submitCompany"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Créer un compte entreprise
                </button>
            </form>
            <hr class="my-5">
            <a href="formSignIn.php" type="button" class="py-2.5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Se connecter avec un compte existant</a>
        </div>
    </div>
</body>
</html>

<script src="../js/signup.js"></script>