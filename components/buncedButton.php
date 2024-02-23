<?php

function buncedButton($text, $url) {
    return  '
        <a id="buncedButton" href="'.$url.'"  style="padding-left: 24px; padding-right: 24px; padding-top: 8px; padding-bottom: 8px; left: 5px; top: 5px; position: absolute; background: #11563A; border-radius: 50px; border: 1px #1ACD81 solid; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                <div style="text-align: center; color: white; font-size: 18px; font-family: Poppins; font-weight: 600; word-wrap: break-word">'.$text.'</div>
    </a>';
}

?>

<!-- <style>
    #buncedButton:hover {
        transform: translate(0, -10px);
        transition: 0.3s;
    }
</style> -->