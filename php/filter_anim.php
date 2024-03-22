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
                            <input class="form-check-input me-1" type="checkbox" value="'.($i+1).'" id="firstCheckbox" onchange="search_days(`'.($i+1).'`)">
                            <label class="form-check-label" for="firstCheckbox">'.$days[$i].'</label>
                        </li>
                        ';
                    }
                ?>
                
            </ul>
        </div>
    </div>
</div>
<div class="row pb-5">
    <div class="col">
        <button class="accordion">
            <i class="fas fa-masks-theater fa-fw me-3"></i>
            <span>Pasākumi</span>
        </button>
        <div class="panel">
            <ul class="list-group">
            <?php
                $sql_theme = "SELECT * FROM `theme`";
                $result_theme = $conn->query($sql_theme);
                $theme_ico = ['fa-city','fa-martini-glass-citrus','fa-democrat','fa-champagne-glasses','fa-children','fa-masks-theater','fa-school','fa-cake-candles'];

                if($result_theme->num_rows > 0)
                {
                    while($row_theme = $result_theme->fetch_assoc())
                    {
                        echo '
                        <li class="list-group-item">
                            <i class="fa-solid '.$theme_ico[$row_theme['id'] - 1].' border rounded ps-1 pt-1 pe-1 pb-1 me-2" style="color: #CCCCFF;"></i>
                            <label class="form-check-label" for="themeCheckbox'.$row_theme['id'].'" style="font-size: 14px;">'.$row_theme['name'].'</label>
                            <input class="form-check-input me-1" type="checkbox" value="'.$row_theme['id'].'" id="themeCheckbox'.$row_theme['id'].'">
                        </li>
                        ';
                    }
                }
                else
                {
                    echo "Pasākumu veidi nav atrasti!";
                }
            ?>
            </ul>
        </div>
    </div>
</div>