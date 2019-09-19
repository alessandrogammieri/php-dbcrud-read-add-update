function getDrink() {
    $(".drink").remove();
    $.ajax({
        url: "api.php",
        method: "GET",
        success: function (data) {
            printDrink(data);  
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

function deleteDrink() {  
    var element = $(this);
    var box = element.parent();
    var idDrink = box.data("id")  
    $.ajax({
        url: "api-del.php",
        method: "GET",
        data: { id: idDrink},
        success: function (data) {
            getDrink();
        },
        error: function () {
            alert("C'è stato un errore nella cancellazione");
        }
    })
}

function init() {
    getDrink();
    $(document).on("click", "#delete", deleteDrink);
}

$(document).ready(init);