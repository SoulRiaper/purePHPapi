<?php
function doAction($urls)
{
    global $endpoints;
    foreach($endpoints as $key => $value)
    {
        $endUrl = explode( "/" ,$key);
        if($urls == $endUrl)
        {
            echo $value;
            return;
        }
    }
    echo "Not Found, 404";
}
?>