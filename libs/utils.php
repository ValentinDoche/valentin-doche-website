<?php
function strintBoolToInt($string){
    if ($string === 'true') {
        return 1;
    }
    else{
        return 0;
    }
}
