<?php

// mysql hostname
$db_host = "127.8.170.1";

// database name
$db_name = "startupsmexico";

// database user name
$db_user = "adminc3sGp5Y";

// database password
$db_pass = "U9U7b8y8W5Ay";

// admin username
$admin_user = "admin";

// admin password
$admin_pass = "AY-o017@1H672n3";

// HTML that goes just before </head>
$head_html = "";

// attribution (must leave link intact, per our license)
$attribution = "
  <span>
    Based on <a href='http://www.represent.la' target='_blank'>RepresentLA</a>
  </span>
";

// show events on the map? if set to "true", an event
// category will appear in the marker list, and you can
// run events_get.php in your browser (or a chron) to populate
// it with data from eventbrite.
$show_events = true;

    // put your eventbrite api key here
    $eb_app_key = "135450031447556006295";

    // search eventbrite for these keywords
    // add %20OR%20 between keywords for an "OR" search
    // example: startup%20OR%20demo+day
    $eb_keywords = "startup";

    // specify city to search in and around
    // example: Santa+Monica
    $eb_city = "Santa+Monica";

    // specify search radius (in miles)
    $eb_within_radius = 100;

?>
