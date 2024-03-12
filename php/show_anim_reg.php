<div id="anim_reg_form" class="text-light pt-3 ps-2 pe-2" style="position: fixed;width: 350px; height: 1000px;z-index: 30; background-color: #424242;" hidden>
    <i class="btn text-light float-end mt-2 me-3 fa-regular fa-circle-xmark" style="font-size: 24px;" onclick="close_form()"></i>
    <p class="h5 mt-2 mb-2">Vēlaties strādāt pie mums?<br><b style="color: #CCCCFF;">REĢISTRĒJATIES!</b></p>
    <form method="POST" class="container-fluid text-center">
        <input type="text" name="" id="name" placeholder=" Vārds" class="rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;">
        <input type="text" name="" id="surname" placeholder=" Uzvārds" class="rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;">
        <input type="text" name="" id="adress" placeholder=" Adrese" class="rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;">
        <input type="text" name="" id="phone_number" placeholder=" Telefona numurs: +371 ..." class="rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;">
        <input type="email" name="" id="e_mail" placeholder=" Ē-pasts" class="rounded me-2 mb-2 bg-dark text-light" style="width: 300px; height: 40px;">
        <textarea name="" id="about_me" cols="35" rows="10" style="margin-right: 10px;" class="rounded bg-dark text-light" placeholder=" Par mani!"></textarea>
        <input id="send_data" type="button" class="btn bg-success text-light" value="Pieteikties">
    </form>
</div>