<?php
    if(isset($_COOKIE['is_worker']) && $_COOKIE['is_worker'] == 1)
    {
        echo'
            <footer>
                <div class="footer container-fluid bg-dark text-light mt-5">
                    <div class="row">
                    <div class="col-1"></div>
                        <div class="col pt-2 pb-2">
                            <p class="h4">Kontaktinformācija</p>
                            <b class="">Autors: Artis Dairis Kroičs</b>
                            <b class="ps-3">Tālrunis: +37129120520</b><br>
                            <b class="h7">E-pasts: partypals@gmail.com</b>
                        </div>
                        <div class="col pt-2 pb-2">
                            <p class="h4">Seko mums</p>
                            <div class="footer_cntnt">
                                <a href="#" class="ms-4"><i style="font-size: 24px;" class="fa-brands fa-square-instagram text-light"></i></a>
                                <a href="#" class="ms-4"><i style="font-size: 24px;" class="fa-brands fa-facebook text-light"></i></a>
                            </div>
                        </div>
                        <div class="col pt-2 pb-2 text-center">
                            <button class="btn text-light bg-secondary mt-3" data-bs-toggle="modal" data-bs-target="#helpModal1">Paldzība</button>
                        </div>
                    </div>
                </div>
            </footer>
        ';
    }
    else
    {
        echo '
        <footer>
            <div class="footer container-fluid bg-dark text-light mt-5">
                <div class="row">
                <div class="col-1"></div>
                    <div class="col pt-2 pb-2">
                        <p class="h4">Kontaktinformācija</p>
                        <b class="">Autors: Artis Dairis Kroičs</b>
                        <b class="ps-3">Tālrunis: +37129120520</b><br>
                        <b class="h7">E-pasts: partypals@gmail.com</b>
                    </div>
                    <div class="col pt-2 pb-2">
                        <p class="h4">Seko mums</p>
                        <div class="footer_cntnt">
                            <a href="#" class="ms-4"><i style="font-size: 24px;" class="fa-brands fa-square-instagram text-light"></i></a>
                            <a href="#" class="ms-4"><i style="font-size: 24px;" class="fa-brands fa-facebook text-light"></i></a>
                        </div>
                    </div>
                    <div class="col pt-2 pb-2 text-center">
                        <button class="btn text-light bg-secondary mt-3" data-bs-toggle="modal" data-bs-target="#helpModal1">Paldzība</button>
                        <button class="btn text-light bg-success mt-3" onclick="show_reg_form()">Pieteikties mūsu komandai!</button>
                    </div>
                </div>
            </div>
        </footer>
        ';
    }
?>

<div class="modal fade" id="helpModal1" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true" style="position: absolute;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-secondary text-light">
                <h5 class="modal-title" id="helpModalLabel">Paldzība</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="helpForm">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">E-pasts</label>
                        <input type="email" class="form-control" id="inputEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputTheme" class="form-label">Tēmas</label>
                        <select class="form-select" id="inputTheme" required>
                            <option value=""></option>
                            <option value="Kļūda">Kļūda</option>
                            <option value="Palīdzība">Palīdzība</option>
                            <option value="Ieteikumi">Ieteikumi</option>
                            <option value="Parole">Parole</option>
                            <option value="Konta problēmas">Konta problēmas</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputText" class="form-label">Teksts</label>
                        <textarea class="form-control" id="inputText" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Aizsūtīt</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    (function()
    {
        emailjs.init(
        {
            publicKey: "_85BUx3upvIWu6DTM",
        });
    })();

    document.getElementById('helpForm').addEventListener('submit', function(event) 
    {
        event.preventDefault(); 

        var email = document.getElementById('inputEmail').value;
        var theme = document.getElementById('inputTheme').value;
        var text = document.getElementById('inputText').value;

        console.log('Email:', email);
        console.log('Theme:', theme);
        console.log('Text:', text);

        sendMail(email, theme, text);

        var helpModal = new bootstrap.Modal(document.getElementById('helpModal'));
        helpModal.hide();
    });

    function sendMail(email, theme, text)
    {
        let parms = 
        {
            email : email,
            theme : theme,
            text : text,
        }

        emailjs.send("service_ner374x","template_4cbjwzr",parms).then(
        {

        })
    }
</script>