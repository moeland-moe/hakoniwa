var $ = require('jquery');
window.jQuery = $; // for jquery-ui
require('jquery-ui-dist/jquery-ui');

var octicons = require("octicons")
octicons.home.toSVG({ "class": "oct-home" })

var w;
var p;

global.ps = function(x, y){
    document.InputPlan.POINTX.options[x].selected = true;
    document.InputPlan.POINTY.options[y].selected = true;
    return true;
}

global.ns = function(x){
    document.InputPlan.NUMBER.options[x].selected = true;
    $('.prc').removeClass("selectedCmd");
    $('#prc_' + x).addClass("selectedCmd");
    return true;
}

global.changeTarget = function(x, y){
    $('#tx').text(x);
    $('#ty').text(y);
}

global.settarget = function(part){
    p = part.options[part.selectedIndex].value;
    chTarget(p);
}
global.targetopen = function(){
    chTarget(p);
    openFade('target_map');
    openFade('target_ctl');
}
global.targetclose = function(){
    openFade('target_map');
    openFade('target_ctl');
    openFade('target_confirm');
    
}

/*
 send form data as Ajax.
 */
global.cmd_set = function(mode){
    $('#cmdmode').val(mode);
    $.post("hako-main.php", $("#input_plan").serialize()).done(function( data ) {
        var out_html = $(data);
        var writeText = out_html.find('.CommandCell').html();
        console.log("writeText: "+writeText)
        $('#in_cmd').html(writeText);
    })
}

$(document).ready(function(){
    p = $('#default_target').text()
    $('#target_id').change();
});


