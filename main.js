window.addEventListener("load", function () {

    var imagenes = [];
    imagenes[0] = "img/foto1.jpg";
    imagenes[1] = "img/foto2.jpg";
    imagenes[2] = "img/foto3.jpg";
    imagenes[3] = "img/foto4.jpg";
    imagenes[4] = "img/foto5.jpg";

    var indiceImagenes = 0;

    function cambiarImagenes() {


        document.slider.src = imagenes[indiceImagenes];
        if (indiceImagenes < 4) {
            indiceImagenes++;
        } else {
            indiceImagenes = 0;
        }
    }
    this.setInterval(cambiarImagenes, 5000)
});