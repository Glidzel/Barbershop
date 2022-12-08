$(document).ready(init);

function init(){
    $("#mi_libro").booklet(
        {
        width:1230,
        height:400,

        closed: false,
        covers:true,
        autoCenter:true,

        pagePadding:0,
        hoverWidth:100,


        }
    );

    $("#bt_go").click(function(){
        $("#mi_libro").booklet("gotopage", 
        $("#in_go").val());
    });
}