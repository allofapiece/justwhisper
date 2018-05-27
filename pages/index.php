<?php
    require_once './inc/config.php';
    include PATH.'/head.php';
?>
    <div class="container">
        <form class="form-signin " method="post" action="">
            <h2 class="form-signin-heading">Please sign in through social network.</h2>
            <script src="//ulogin.ru/js/ulogin.js"></script>
            <div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name,photo,network;providers=vkontakte,facebook,twitter,instagram,google;redirect_uri=http%3A%2F%2Flocalhost%2Fjustwhisper%2Fpages%2Fauthorization.php;mobilebuttons=0;"></div>
        </form>
    </div>
<?php
    include PATH.'/foot.php';
?>

