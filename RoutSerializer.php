<?php
class RoutSerializer
{
    private $rawRoute;

    function __construct($getObject)
    {
        $this->rawRoute = $getObject;
    }

    function getRoutArray()
    {
        $this->rawRoute = (isset($this->rawRoute["page"])) ? $this->rawRoute['page'] : '';
        $this->rawRoute = rtrim($this->rawRoute, "/");
        return explode("/", $this->rawRoute);
    }
}
?>