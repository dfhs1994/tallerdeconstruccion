<div class="nav-wrapper yellow-text blue darken-4">
    <a href="#" class="right brand-logo">Logo</a>

    <?php
    include '../php/funtions/menu.php';
   writeMenu($_POST['choices']);  
   
    ?>

    <a href="#" data-activates="nav-mobile01" class="button-collapse"><i class="material-icons">menu</i></a>
</div>

<script type="text/javascript">
    <?php
        echo "$(document).ready(function() {\n";
        echo "$('.button-colapse').sideNav();\n";
        echo "));\n";
        foreach ($_POST['choices']as $key => $value){
            if (isset ($value['targetDiv'])&& !is_null($value['targetDiv'])){
                echo "\n";
                echo '$("#' . $value [id] . '").click(funtion(){';
                echo "\n";
                echo'$("#' . $value['targetDiv']. '").load("' . $value['loadPage'] . '");';
                echo "\n";
                echo '});';;
                echo "\n";
            }
        }
        ?>
</script>