<?php
    echo '
    <div id="signInModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeSignInModal()">&times;</span>
        <div class="sign_in_box">
            <h2>Autorizācija</h2>
            <form method="post" action="php/auth.php">
                <label for="username"><b>Lietotājvārds:</b></label><br>
                <input type="text" id="username_login" class="auth_inputs" name="username" value="agrispro" required>
                <br>
                <label for="password"><b>Parole:</b></label><br>
                <input type="password" id="password_login" class="auth_inputs" name="password" value="Agris2004" required>
                <br>
                <input type="submit" onclick="signIn()" value="Autorizēties" class="modal_btn">
            </form>
            <span class="auth_links" id="openForgotPassModal"><b>Aizmirsu paroli!</b></span>
            <span class="auth_links" id="openRegisterModal"><b>Reģistrēties</b></span>
        </div>
    </div>
</div>

<div id="registerModal" class="modal">
    <div class="modal-content1">
        <span class="close" onclick="closeRegisterModal()">&times;</span>
        <div class="register_box">
            <h2>Reģistrēšanās</h2>
            <button type="button" onclick="registerUser()">Lietotājs</button>
            <button type="button" onclick="registerAnimators()">Darbinieks</button>
            <hr>
            <div id="userReg">
                <form method="post" action="php/users_file/users_register.php">
                    <input type="text" id="username_reg" class="input1" name="username" placeholder="Lietotājvārds" required><br>
                    <input type="text" pattern="[A-Za-z]+" title="Jūsu vārds, piemēram: Jānis" class="input2" name="name" placeholder="Vārds" required>
                    <input type="text" pattern="[A-Za-z]+" title="Jūsu uzvārds, piemēram: Ziediņš" class="input2" name="surname" placeholder="Uzvārds" required>
                    <br>
                    <input type="password" id="passvord_v1" class="input2" name="passvord_v1" placeholder="Parole" required>
                    <input type="password" id="passvord_v2" class="input2" name="passvord_v2" placeholder="Paroles atkārtojums" required>
                    <br>
                    <input type="text" pattern="[0-9+]+" title="Var vadīt tikai ciparus!" id="phone"  class="input2" name="phone" placeholder="Telefona numurs" value="+371" required>
                    <input type="text" pattern=".*@.*" title="E-pasts tika nepareizi uzrakstīts!" id="e_pasts" class="input2" name="e_pasts" placeholder="E-pasts" required>
                        <br>
                    <input type="submit" value="Apstiprināt" onclick="register()" class="modal_btn">
                </form>
            </div>
            <div id="animReg" hidden>
                <form method="post" action="">
                    <input type="text" id="username_reg" class="input1" name="username" placeholder="Lietotājvārds" required><br>
                    <input type="text" pattern="[A-Za-z]+" title="Jūsu vārds, piemēram: Jānis" class="input2" name="name" placeholder="Vārds" required>
                    <input type="text" pattern="[A-Za-z]+" title="Jūsu uzvārds, piemēram: Ziediņš" class="input2" name="surname" placeholder="Uzvārds" required>
                    <br>
                    <input type="text" pattern="[0-9+]+" title="Var vadīt tikai ciparus!" id="phone"  class="input2" name="phone" placeholder="Telefona numurs" value="+371" required>
                    <input type="text" pattern=".*@.*" title="E-pasts tika nepareizi uzrakstīts!" id="e_pasts" class="input2" name="e_pasts" placeholder="E-pasts" required>
                    <br>
                    <input type="text" pattern="[A-Za-z0-9]+" title="Ierakstiet jūsu adresi" class="input1" name="adress" placeholder="Adrese" required>
                    <br>
                    <input type="text" pattern="[A-Za-z]+" title="Personāžs, piemēram: \'Spider-Man\'" class="input2" name="character" placeholder="Personāžs" required>
                    <br>
                    <input type="submit" value="Apstiprināt" onclick="" class="modal_btn">
                </form>
            </div>
        </div>
    </div>
</div>

<div id="forgotPassModal" class="modal">
    <div class="modal-content2">
        <span class="close" onclick="closeForgotPassModal()">&times;</span>
        <div class="sign_in_box">
            <h2>Aizmirsu paroli</h2>
            <form method="post">
                <label for="username1"><b>Lietotājvārds:</b></label><br>
                <input type="text" id="username1" class="auth_inputs" name="username1" required>

                <br>

                <label for="e_mail1"><b>E-pasts:</b></label><br>
                <input type="text" id="e_mail1" class="auth_inputs" name="e_mail1" required>
        
                <br>

                <input type="submit" onclick="forgotPass()" value="Apstiprināt" class="modal_btn">
            </form>
        </div>
    </div>
</div>
    ';
 ?>