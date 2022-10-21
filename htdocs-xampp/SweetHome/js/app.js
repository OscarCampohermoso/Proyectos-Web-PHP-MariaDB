$("#1_home").click(function (){
    swal("Bello departamento moderno, soleado, iluminado, techos altos, espacioso con una vista fantástica a estrenar\n" +
        "\n" +
        "Dos dormitorios amplios, uno en suite\n" +
        "\n" +
        "Baño compartido\n" +
        "\n" +
        "Sala de estar comedor con cocina integrada\n" +
        "\n" +
        "Lavandería con terraza\n" +
        "\n" +
        "Lobby tipo hotel\n" +
        "\n" +
        "Preciosa terraza comunitaria con parrillero\n" +
        "\n");
});
$("#2_home").click(function (){
    swal("Materiales de primera calidad\n" +
        "\n" +
        "Ascensor OTIS\n" +
        "\n" +
        "Instalación gas domiciliario\n" +
        "\n" +
        "Ventanas doble panel\n" +
        "\n" +
        "Closets amplios de piso a techo\n" +
        "\n" +
        "Porcelanato importado\n" +
        "\n" +
        "Sanitarios FV\n" +
        "\n" +
        "Box. Vidrio templado\n" +
        "\n" +
        "Transporte público a la mano")
});

$('.resizableImage').hover(makeBigger, returnToOriginalSize);

function makeBigger() {
    $(this).css({height: '+=10px', width: '+=10%'});
}
function returnToOriginalSize() {
    $(this).css({height: "", width: ""});
}