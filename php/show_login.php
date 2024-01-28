<?php
    echo
    '
    <div id="signInModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeSignInModal()">&times;</span>
        <div class="sign_in_box">
            <h2>Sign In</h2>
            <form method="post" action="php/auth.php">
                <label for="username"><b>Username:</b></label><br>
                <input type="text" id="username_login" class="auth_inputs" name="username" required>

                <br>

                <label for="password"><b>Password:</b></label><br>
                <input type="password" id="password_login" class="auth_inputs" name="password" required>
        
                <br>

                <input type="submit" onclick="signIn()" value="Sign In" class="modal_btn">
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
            <hr>
            <form method="post" action="php/users_file/users_register.php">
                <input type="text" id="username_reg" class="input1" name="username" placeholder="Lietotājvārds" required><br>
                <input type="text" pattern="[A-Za-z]+" title="Jūsu vārds, piemēram: Jānis" class="input2" name="name" placeholder="Vārds" required>
                <input type="text" pattern="[A-Za-z]+" title="Jūsu uzvārds, piemēram: Ziediņš" class="input2" name="surname" placeholder="Uzvārds" required>
                <br>
                <div class="input2_l">
                    <span for="gender">Dzimums</span> <br>
                        <label for="male">Vīrietis</label>
                            <input type="radio" name="gender" id="male" value="male">
                        <label for="female">Sieviete</label>
                            <input type="radio" name="gender" id="female" value="female">
                </div>
                <div class="input2_r">
                    <label for="age">Gadi</label><br>
                        <input type="text" pattern="[0-9]+" title="Var vadīt tikai ciparus!" name="age" minlength="2" min="12" value="12" id="age" required>
                </div>
                <br>
                <input type="password" id="passvord_v1" class="input2" name="passvord_v1" placeholder="Parole" required>
                <input type="password" id="passvord_v2" class="input2" name="passvord_v2" placeholder="Paroles atkārtojums" required>

                <input type="text" pattern="[0-9+]+" title="Var vadīt tikai ciparus!" id="phone"  class="input2" name="phone" placeholder="Telefona numurs" value="+371" required>
                <input type="text" pattern=".*@.*" title="E-pasts tika nepareizi uzrakstīts!" id="e_pasts" class="input2" name="e_pasts" placeholder="E-pasts" required>
                    <br>
                <input type="submit" value="Confirm" onclick="register()" class="modal_btn">
            </form>
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