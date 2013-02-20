/*
 * 
 * Created by Paz Muñoz
 * http://www.mariapaz.co
 */
window.onload = function() {
    

    $("#wrapper, #found").css("display", "block");
    setTimeout(function() {
        $("#wrapper").addClass("initWeb");
    }, 500);

};

var items = [];
var itemsFound = [];


    $(document).ready(function() {

    /* This is basic - uses default settings */
    
    $("a#single_image").fancybox();
    
    /* Using custom settings */
    
    $("a#inline").fancybox({
        'hideOnContentClick': true
    });

    /* Apply fancybox to multiple items */
    
    $("a.group").fancybox({
        'transitionIn'  :   'elastic',
        'transitionOut' :   'elastic',
        'speedIn'       :   600, 
        'speedOut'      :   200, 
        'overlayShow'   :   false
    });
    
});

function search() {
    itemsFound = [];
    removeClass(document.getElementById("paginator"), "initWeb"); //líneas para la animación de transición
    removeClass(document.getElementById("found"), "initWeb");
    addClass(document.getElementById("logo"), "closeLogo");
    
    $.post("search.php", $("#searchForm").serialize(),function(dato){
        $('#found').html(dato);
    });        
    addClass(document.getElementById("found"), "initWeb");




}

function resetPaginator() {
    totalPages = 0;
    currentPaginator = 1;
    $("#arrowPrevious").hide();
    $("#paginator span").html("P&aacute;gina " + currentPaginator);
    $("#arrowNext").show();
}

function hasClass(ele, cls) {
    return ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}

function addClass(ele, cls) {
    if (!this.hasClass(ele, cls))
        ele.className += cls;
}

function removeClass(ele, cls) {
    if (hasClass(ele, cls)) {
        var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
        ele.className = ele.className.replace(reg, '');
    }
}

