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

function addDrink() {  
    var drink_name = $(".name").val();
    var brand = $(".brand").val();
    var price = $(".price").val();
    var date = $(".date").val();
    var mom = moment(date, "YYYY-MM-DD");
    var expiration_date = mom.format("YYYY-MM-DD");
    $.ajax({
        url: "api-add.php",
        method: "GET",
        data: { 
            drink_name: drink_name,
            brand: brand,
            price: price,
            expiration_date: expiration_date
        },
        success: function () {
            console.log("Nome: " + drink_name + " " + "Marca: " + brand + " " + "Prezzo: " + price + " " + "Scadenza: " + expiration_date);
            getDrink();
        },
        error: function () {
            alert("C'è stato un errore nel caricamento");
        }
    })
    $(".name").val("");
    $(".brand").val("");
    $(".price").val("");
    $(".date").val("");
}

function init() {
    getDrink();
    $(document).on("click", "#delete", deleteDrink);
    $(document).on("click", "#add", addDrink);
}

$(document).ready(init);