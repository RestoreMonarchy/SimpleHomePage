<?php

    $title = "Home - Restore Monarchy";

    // Replace logo.png with yours
    // Replace favicon.ico with yours (in the root file)

    // Modify popup notification in js/notifications.js

    $servers = [
        [
        'type'    => 'unturned',
        'host'    => '46.242.129.202:27015',
        ],
        [
        'type'    => 'unturned',
        'host'    => '46.242.129.202:27035',
        ],
        [
        'type'    => 'unturned',
        'host'    => '46.242.129.202:27045',
        ],
        [
        'type'    => 'unturned',
        'host'    => '46.242.129.202:27010',
        ],
        [
        'type'    => 'rust',
        'host'    => '46.242.129.202:28015',
        ]
    ];

    $trans = [];

    $trans["nav"]["brand"] = "Restore Monarchy";
    $trans["nav"]["home"] = "Home";
    $trans["nav"]["servers"] = "Servers";
    $trans["nav"]["shop"] = "Become premium";
    $trans["nav"]["discord"] = "Discord";

    // Replace img/logo.png with yours
    // Replace img/headerbg.png with yours
    $trans["header"]["title"] = "Welcome to Restore Monarchy";
    $trans["header"]["description"] = "Your favorite survival games servers!";

    // Remember to set up the servers
    $trans["servers"]["heading"] = "Servers";
    $trans["servers"]["description"] = "Below are listed our current game servers.";

    $trans["shop"]["heading"] = "Become Premium";
    $trans["shop"]["description"] = "If you feel that we have done a great job and you enjoy playing on our servers, you can support us by purchasing ranks in our store.";
    
    $shops = array (
        array("URL"=>"https://restoremonarchy.com/store", "Text"=>"Buy Unturned Ranks"),
        array("URL"=>"https://restoremonarchy.com/store", "Text"=>"Buy Rust Ranks")
    );
    
    $trans["discord"]["heading"] = "Discord";
    $trans["discord"]["description"] = "Announcements, Events, News, Guides, Giveaways & More will be posted on our Discord Servers!";

    $discords = array (
        array("URL"=>"https://restoremonarchy.com/store", "Image"=>"/img/discord_rust.png"),
        array("URL"=>"https://restoremonarchy.com/store", "Image"=>"/img/discord_unturned.png")
    );

    $trans["footer"]["copyright"] = "Copyright &copy; RestoreMonarchy.com 2018";
    $trans["footer"]["credits"] = "Website made by <a target='_blank' href='http://steamcommunity.com/profiles/76561198285897058'>MCrow</a>";
?>