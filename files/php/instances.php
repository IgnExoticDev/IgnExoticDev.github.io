<?php
$instance['BetaTest'] = array_merge($instance['BetaTest'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'logs',
        'screenshots'
    ),
    "whitelist" => array(),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "BetaTest",
        "ip" => "mc.hypixel.net",
        "port" => 25565
    )
));

$instance['Juicio'] = array_merge($instance['Juicio'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => false,
    "ignored" => array(),
    "whitelist" => array(
        'IgnExotiic',
        'MaxG_MC'
    ),
    "whitelistActive" => true,
    "status" => array(
        "nameServer" => "Juicio",
        "ip" => "178.32.106.234",
        "port" => 25599
    )
));
?>
