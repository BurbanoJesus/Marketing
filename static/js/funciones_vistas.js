// 
// VISTA INICIO
if ($("#inicio").length > 0) {
    $(document).on("click","#btn_start", function(e){
        // elemento objetivo
        let elemento = $("#target_btn_start");
        console.log(elemento);
        // animacion
        $('html, body').animate({
	        scrollTop: elemento.offset().top - 85
	    }, 500);
    });
}
// 
// VISTA