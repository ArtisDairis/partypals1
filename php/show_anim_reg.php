<div id="anim_reg_form" class="text-light pt-3 ps-2 pe-2" style="position: fixed;width: 350px; height: 1000px;z-index: 30; background-color: #424242;" hidden>
    <i class="btn text-light float-end mt-2 me-3 fa-regular fa-circle-xmark" style="font-size: 24px;" onclick="close_form()"></i>
    <p class="h5 mt-2 mb-2">Vēlaties strādāt pie mums?<br><b style="color: #CCCCFF;">REĢISTRĒJATIES!</b></p>
    <form method="POST" class="container-fluid text-center" id="registrationForm">
        <div class="input-group">
            <input type="text" name="name" id="name" placeholder="Vārds" class="form-control rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;" required>
        </div>

        <div class="input-group">
            <input type="text" name="surname" id="surname" placeholder=" Uzvārds" class="form-control rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;" required>
        </div>
        
        <div class="input-group">
            <input type="text" name="adress" id="adress" placeholder=" Adrese" class="form-control rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;" required>
        </div>

        <div class="input-group">
            <input type="text" name="phone_number" id="phone_number" placeholder=" Telefona numurs: +371 ..." class="form-control rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;" required>
        </div>
        
        <div class="input-group">
            <input type="email" name="e_mail" id="e_mail" placeholder=" Ē-pasts" class="form-control rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;" required>
        </div>

        <div class="input-group">
            <textarea name="about_me" id="about_me" cols="35" rows="10" style="margin-right: 10px;" class="form-control rounded bg-dark text-light" placeholder=" Par mani!" oninput="checksize()" maxlength="300" required></textarea>
            <div style="position:absolute; z-index: 10; top: 90%; left: 75%;">
                <b id="numbervalue">0</b><b>/300</b>
            </div>
        </div>

        <input id="send_data" onclick="registerAnim()" type="button" class="btn bg-success text-light mt-3" value="Pieteikties">
    </form>
</div>
