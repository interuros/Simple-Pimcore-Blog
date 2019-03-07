<?php 

return [
    1 => [
        "id" => 1,
        "name" => "blogpost",
        "pattern" => "/\\/article\\/([0-9]+)\\/(.*)/",
        "reverse" => "/article/%id/%title",
        "module" => NULL,
        "controller" => "@AppBundle\\Controller\\DefaultController",
        "action" => "blogarticle",
        "variables" => "id,title",
        "defaults" => NULL,
        "siteId" => [

        ],
        "priority" => 0,
        "legacy" => FALSE,
        "creationDate" => 1551964089,
        "modificationDate" => 1551965496
    ]
];
