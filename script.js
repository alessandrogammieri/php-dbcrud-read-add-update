function getDrink() {
    $(".drink").remove();
    $.ajax({
        url: "api.php",
        method: "GET",
        success: function (data) {
            printDrink(data);  
            console.log(data);
            
        },
        error: function() {
            alert("C'è stato un errore in download");
        } 
    });  
}

function printDrink(data) {
    var contenitore = $(".listino");
    var source = $("#item-template").html();
    var template = Handlebars.compile(source);
    for (i = 0; i < data.length; i++) {
        var d = data[i];
        var context = d;
        var html = template(context);
        contenitore.append(html);
    }
}





function init() {
    getDrink();
}

$(document).ready(init);