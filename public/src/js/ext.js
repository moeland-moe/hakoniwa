var $ = require('jquery');
window.jQuery = $; // for jquery-ui
require('jquery-ui-dist/jquery-ui');

var octicons = require("octicons")
octicons.home.toSVG({ "class": "oct-home" })

global.openPop = function(c){
    var dispBlock = $("#" + c );

    $( dispBlock ).toggle( "blind", 200 );
}
global.openFade = function(c){
    var dispBlock = $("#" + c );

    $( dispBlock ).fadeToggle(200);
}

global.chTarget = function(c) {
    $('#target_map')[0].contentDocument.location.replace('hako-main.php?target=' + c);
}

