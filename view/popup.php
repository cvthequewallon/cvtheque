<!-- FUNCTIONS OF POPUPS -->

<!-- 
    SIGN IN = connexion
    SIGN UP = inscription
 -->

<div class="fixed inset-0 bg-black bg-opacity-20 hidden" id="backgroundShadow">
    <div id="popup"
        class=" rounded-3xl table border-collapse w-1/2 h-1/3 mt-8 m-auto bg-white text-center text-2xl">
        <!--
        ███████ ██  ██████  ███    ██     ██    ██ ██████       ██████  ██████  ███    ███ ██████   █████  ███    ██ ██    ██ 
        ██      ██ ██       ████   ██     ██    ██ ██   ██     ██      ██    ██ ████  ████ ██   ██ ██   ██ ████   ██  ██  ██  
        ███████ ██ ██   ███ ██ ██  ██     ██    ██ ██████      ██      ██    ██ ██ ████ ██ ██████  ███████ ██ ██  ██   ████   
             ██ ██ ██    ██ ██  ██ ██     ██    ██ ██          ██      ██    ██ ██  ██  ██ ██      ██   ██ ██  ██ ██    ██    
        ███████ ██  ██████  ██   ████      ██████  ██           ██████  ██████  ██      ██ ██      ██   ██ ██   ████    ██      
        -->
        <form hidden class=" mt-5 px-3 max-w-fit m-auto" id="formSignUpCompany" action="#" method="post">

            <p class=" mx-auto w-fit mt-3 " id="titleSignUpCompany"></p>

            <div class=" mt-4 mb-12">
                <button class=" mx-2 border-2 border-black rounded-lg p-1 hover:text-white hover:bg-black transition-all" 
                id="btnSignUpStudent" button_type="btnSignUpStudent">
                    Etudiant
                </button>

                <a class=" mx-2 border-2 border-black  rounded-lg p-1 text-white bg-black">
                    Entreprise
                </a>
            </div>

            <!-- mail -->
            <div class=" mb-5 text-center">
                <label>mail : </label>
                <input value="" class=" border-2 text-xl " size="25" type="text" id="mail" required
                    name="mail" minlength="4">
            </div>
            <!-- password -->
            <div class=" mb-7 text-center">
                <label>mot de passe : </label>
                <input value="" class=" border-2 text-xl " size="25" type="password" required
                    id="password" name="password" minlength="8">
            </div>
            <!-- Button Sign up -->
            <div>
                <button
                class=" mt-4 bg-white hover:bg-blue-500 p-2 px-2.5 right-0 rounded-md float-none text-blue-500 hover:text-white transition-all"
                    type="submit" name="submit" id="submit" value="BtnSignUpCompany">s'inscrire
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
        <form hidden class=" mt-5 px-3 max-w-fit m-auto " id="formSignUpStudent" action="#" method="post">

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

            <!-- mail -->
            <div class=" mb-5 text-center">
                <label>mail : </label>
                <input value="" class=" border-2 text-xl" size="25" type="text" required id="mail"
                    name="mail" minlength="4">
            </div>
            <!-- password -->
            <div class=" mb-7 text-center">
                <label>mot de passe : </label>
                <input value="" class=" border-2 text-xl" size="25" type="password" required
                    id="password" name="password" minlength="8">
            </div>
            <!-- Button Sign up -->
            <div>
                <button
                    class=" mt-4 bg-white hover:bg-blue-500 p-2 px-2.5 right-0 rounded-md float-none text-blue-500 hover:text-white transition-all"
                    type="submit" name="submit" id="submit" value="btnSignUpStudent">s'inscrire
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
            <button class=" mt-6 mb-3 bottom-0 text-xl hover:underline font-bold"
                id="closePopupBtn">Fermer
            </button>
        </div>
    </div>
</div>