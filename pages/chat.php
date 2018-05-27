<?php
    require_once './inc/config.php';
    include PATH.'/head.php';
?>
<script type="text/javascript" src="./js/main.js"></script>
    <div class="container">

        <?php
                if(isset($_SESSION['auth']['photo'])){
                    echo "<div class=\"alert alert-info\">Здравствуйте, ".$_SESSION['auth']['first_name']." ".$_SESSION['auth']['last_name'].". Вы вошли через "."<a href=\"#\" class=\"alert-link\">".$_SESSION['auth']['network']."</a>".". "."<a href=\"?page=logout\" class=\"alert-link\">Выйти.</a>"."</div>";
        }

                ?>
        <div id="list">

        </div>
            <!-- List group -->
        <textarea id="message" rows = "2" class="form-control" placeholder="Type a message"></textarea>
        <button type="submit" id="send" class="btn btn-primary"><span class ="glyphicon glyphicon-send"></span>Отправить</button>
    </div>

<?php
    include PATH.'/foot.php';
?>

