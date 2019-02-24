var $ = require('jquery');
window.jQuery = $; // for jquery-ui
require('jquery-ui-dist/jquery-ui');

var octicons = require("octicons")
octicons.home.toSVG({ "class": "oct-home" })

global.openPop = function(c){
    var dispBlock = $("#" + c );
    $( dispBlock ).toggle( "blind", 200 );
}

