<!-- FUNCTIONS OF POPUPS -->

<!-- 
    SIGN IN = connexion
    SIGN UP = inscription
 -->

<div class=" overflow-auto fixed inset-0 bg-black bg-opacity-20 hidden" id="backgroundShadow">
    <div id="popup"
        class=" mb-10 rounded-3xl block border-collapse w-1/2 h-1/3 mt-8 m-auto bg-white text-center text-2xl">
        <!--
        ███████ ██  ██████  ███    ██     ██    ██ ██████       ██████  ██████  ███    ███ ██████   █████  ███    ██ ██    ██ 
        ██      ██ ██       ████   ██     ██    ██ ██   ██     ██      ██    ██ ████  ████ ██   ██ ██   ██ ████   ██  ██  ██  
        ███████ ██ ██   ███ ██ ██  ██     ██    ██ ██████      ██      ██    ██ ██ ████ ██ ██████  ███████ ██ ██  ██   ████   
             ██ ██ ██    ██ ██  ██ ██     ██    ██ ██          ██      ██    ██ ██  ██  ██ ██      ██   ██ ██  ██ ██    ██    
        ███████ ██  ██████  ██   ████      ██████  ██           ██████  ██████  ██      ██ ██      ██   ██ ██   ████    ██      
        -->
        <form hidden class=" mt-5 px-3 max-w-fit m-auto" id="formSignUpCompany" action="controller/signUp.php" method="post">

            <p class=" mx-auto w-fit mt-3 " id="titleSignUpCompany"></p>

            <div class=" mt-4 mb-12">
                <button
                    class=" mx-2 border-2 border-black rounded-lg p-1 hover:text-white hover:bg-black transition-all"
                    id="btnSignUpStudent" button_type="btnSignUpStudent">
                    Etudiant
                </button>

                <a class=" mx-2 border-2 border-black  rounded-lg p-1 text-white bg-black">
                    Entreprise
                </a>
            </div>
            <!-- first name -->
            <div class=" mb-5 text-center">
                <label>prénom : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" id="first_name" required
                    name="first_name" minlength="4">
            </div>
            <!-- last name -->
            <div class=" mb-5 text-center">
                <label>nom de famille : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" id="last_name" required
                    name="last_name" minlength="4">
            </div>
            <!-- mail -->
            <div class=" mb-5 text-center">
                <label>mail : </label>
                <input value="" class=" border-2 text-xl " size="25" type="email" id="mail" required name="mail"
                    minlength="6">
            </div>
            <!-- password -->
            <div class=" mb-5 text-center">
                <label>mot de passe : </label>
                <input value="" class=" border-2 text-xl " size="25" type="password" required id="password"
                    name="password" minlength="8">
            </div>
            <!-- phone -->
            <div class=" mb-5 text-center">
                <label>téléphone : </label>
                <input value="" class=" border-2 text-xl " size="25" type="tel" required id="phone" name="phone"
                    minlength="10">
            </div>
            <!-- birthday -->
            <div class=" mb-5 text-center">
                <label>date de naissance : </label>
                <input value="" class=" border-2 text-xl " size="25" type="date" required id="birthday" name="birthday">
            </div>
            <!-- town -->
            <div class=" mb-5 text-center">
                <label>ville : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" required id="town" name="town"
                    minlength="4">
            </div>
            <!-- postcode -->
            <div class=" mb-5 text-center">
                <label>code postal : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" required id="postcode" name="postcode"
                    minlength="5" maxlength="5">
            </div>
            <!-- country -->
            <div class=" mb-5 text-center">
                <label>Pays : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" required id="country" name="country"
                    minlength="3">
            </div>
            <!-- Button Sign up -->
            <div>
                <button
                    class=" mt-4 bg-white hover:bg-blue-500 p-2 px-2.5 right-0 rounded-md float-none text-blue-500 hover:text-white transition-all"
                    type="submit" name="submitCompany" id="submitCompany" value="BtnSignUpCompany">s'inscrire
                </button>
            </div>
        </form>


        <!--
        ███████ ██  ██████  ███    ██     ██    ██ ██████      ███████ ████████ ██    ██ ██████  ███████ ███    ██ ████████ 
        ██      ██ ██       ████   ██     ██    ██ ██   ██     ██         ██    ██    ██ ██   ██ ██      ████   ██    ██    
        ███████ ██ ██   ███ ██ ██  ██     ██    ██ ██████      ███████    ██    ██    ██ ██   ██ █████   ██ ██  ██    ██    
             ██ ██ ██    ██ ██  ██ ██     ██    ██ ██               ██    ██    ██    ██ ██   ██ ██      ██  ██ ██    ██    
        ███████ ██  ██████  ██   ████      ██████  ██          ███████    ██     ██████  ██████  ███████ ██   ████    ██                              
        -->
        <form hidden class=" mt-5 px-3 max-w-fit m-auto " id="formSignUpStudent" action="controller/signUp.php" method="post">

            <p class=" mx-auto w-fit mt-3" id="titleSignUpStudent"></p>

            <div class=" mt-4 mb-12">
                <a class=" mx-2 border-2 border-black  rounded-lg p-1 text-white bg-black">
                    Etudiant
                </a>
                <button id="btnSignUpCompany" button_type="btnSignUpCompany"
                    class=" mx-2 border-2 border-black rounded-lg p-1 hover:text-white hover:bg-black transition-all">
                    Entreprise
                </button>
            </div>

            <!-- company name -->
            <div class=" mb-5 text-center">
                <label>Nom de l'entreprise : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" id="companyName" required
                    name="companyName" minlength="4">
            </div>
            <!-- siren -->
            <div class=" mb-5 text-center">
                <label>SIREN : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" id="siren" required
                    name="siren" minlength="4"maxlength="35">
            </div>
            <!-- mail -->
            <div class=" mb-5 text-center">
                <label>mail : </label>
                <input value="" class=" border-2 text-xl " size="25" type="email" id="mail" required name="mail"
                    minlength="6">
            </div>
            <!-- password -->
            <div class=" mb-5 text-center">
                <label>mot de passe : </label>
                <input value="" class=" border-2 text-xl " size="25" type="password" required id="password"
                    name="password" minlength="8">
            </div>
            <!-- phone -->
            <div class=" mb-5 text-center">
                <label>téléphone : </label>
                <input value="" class=" border-2 text-xl " size="25" type="tel" required id="phone" name="phone"
                    minlength="10">
            </div>
            <!-- town -->
            <div class=" mb-5 text-center">
                <label>ville : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" required id="town" name="town"
                    minlength="4">
            </div>
            <!-- postcode -->
            <div class=" mb-5 text-center">
                <label>code postal : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" required id="postcode" name="postcode"
                    minlength="5" maxlength="5">
            </div>
            <!-- country -->
            <div class=" mb-5 text-center">
                <label>Pays : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" required id="country" name="country"
                    minlength="3">
            </div>
            <!-- Button Sign up -->
            <div>
                <button
                    class=" mt-4 bg-white hover:bg-blue-500 p-2 px-2.5 right-0 rounded-md float-none text-blue-500 hover:text-white transition-all"
                    type="submit" name="submitStudent" id="submitStudent" value="BtnSignUpStudent">s'inscrire
                </button>
            </div>
        </form>

        <!-- 
                 ██████ ██       ██████  ███████ ███████ 
                ██      ██      ██    ██ ██      ██      
                ██      ██      ██    ██ ███████ █████   
                ██      ██      ██    ██      ██ ██      
                 ██████ ███████  ██████  ███████ ███████                         
             -->
        <div class=" h-12 table-row align-bottom">
            <button class=" mt-6 mb-3 bottom-0 text-xl hover:underline font-bold" id="closePopupBtn">Fermer
            </button>
        </div>
    </div>
</div>