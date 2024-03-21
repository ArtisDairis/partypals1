<?php
    include "connection.php";

    $days = ['Pirmdiena', 'Otrdiena', 'Trešdiena', 'Ceturtdiena', 'Piektdiena', 'Sestdiena', 'Svētdiena'];
?>

<div class="row mt-3">
    <div class="col">
        <button class="accordion">
            <i class="fas fa-calendar fa-fw me-3"></i>
            <span>Dienas</span>
        </button>
        <div class="panel">
            <ul class="list-group">
                <?php
                    for($i = 0; $i < count($days); $i++)
                    {
                        echo'
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="checkbox" value="'.($i+1).'" id="firstCheckbox">
                            <label class="form-check-label" for="firstCheckbox">'.$days[$i].'</label>
                        </li>
                        ';
                    }
                ?>
                
            </ul>
        </div>
    </div>
</div>
<?php

?>