<?php

add_shortcode("liam-plugin", "render");

function render() {
    // add your frontend code that renders your shortcode here
    ob_start();
    ?>
        
        <div class="wrap">
            <h2>Hello World!</h2>
            <p>This is Liam's custom plugin for the internship</p>
            <p>This is to create a pull request</p>
        </div>

    <?php
    return ob_get_clean();
}
