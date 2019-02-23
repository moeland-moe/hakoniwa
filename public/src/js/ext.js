var $ = require('jquery');
window.jQuery = $; // for jquery-ui
require('jquery-ui-dist/jquery-ui');

global.openPop = function(c){
    var dispBlock = $("#" + c );
    $( dispBlock ).toggle( "blind", 200 );
}

