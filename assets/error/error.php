<?php include_once 'assets/error/error_code.php' ?>
<div id='wrap' class='wrap'>
    <p id='ack_admin'>This background image<br id='ack_br'>
    was drawn by <a href='https://www.pixiv.net/member.php?id=420928'>LM7</a></p>
    <span id='hy_container'><span id='hy'></span>
        <span id='hy_tooltip' class='tooltip'><?php echo theme_name() ?></span>
    </span>
    <h1><?php echo empty($error_code) ? '404' : $error_code ?></h1>
    <p><strong><?php
        $supported_errors = ['400', '401', '403', '500'];
        if (empty($error_code) || $error_code == '404' || !in_array($error_code, $supported_errors)) {
            $description = '404 Not Found';
            if (!empty($min_distance) && $min_distance < 5 && $min_distance >= 0) {
                $description .= ' - did you mean <a href="https://maribelhearn.com/' . $min_page . '">' . $min_page . '</a>?';
            }
            echo $description;
        } else {
            echo error_title();
        }
    ?></strong></p>
    <p class='wide'><?php echo error_text() ?></p>
    <p id='ack_mobile'>The background image was drawn by <a href='https://www.pixiv.net/member.php?id=420928'>LM7</a>.</p>
</div>
