// SLIDER
var slider_scroll = '';
var sections_scroll = [];
var width_elemento = 1;
var width_elemento_sum = 0;
var sections_visible = 1;
sections_visible = (width_window <= 1000) ? 1 : 3;
console.log(sections_visible);

function init_slider(){
    slider_scroll = $('.slider_scroll');
    sections_scroll = slider_scroll.find('.slider_section');
    slider_length = sections_scroll.length;
    // first_section_clone = first_section.clone();
    // first_section_clone.insertAfter(last_section);
    // last_section = slider.find('.slider_section:last');
}

init_slider();

function slider_scroll_derecha(){
    width_elemento = slider_scroll.find('.slider_section').outerWidth(true);
    width_elemento_sum -= slider_scroll.find('.slider_section').outerWidth(true);
    content_slider = slider_scroll.find('.content_slider_scroll');
    rango_slider = width_elemento * (slider_length - sections_visible);
    if (Math.abs(width_elemento_sum) <= rango_slider){
        content_slider.css({
            transform: "translateX("+(width_elemento_sum - 1)+"px)"
        });
        $(".wrap_slider_scroll .btn_horizontal.btn_left").removeClass('disable');
            console.log(width_elemento_sum);
            console.log(rango_slider);
        if (Math.abs(width_elemento_sum) == rango_slider){
            $(".wrap_slider_scroll .btn_horizontal.btn_right").addClass('disable');
        }else{
            $(".wrap_slider_scroll .btn_horizontal.btn_right").removeClass('disable');
        }
    }
}

function slider_scroll_izquierda(){
    width_elemento = slider_scroll.find('.slider_section').outerWidth(true);
    width_elemento_sum += slider_scroll.find('.slider_section').outerWidth(true);
    content_slider = slider_scroll.find('.content_slider_scroll');
    rango_slider = width_elemento * (slider_length - sections_visible);
    if (Math.abs(width_elemento_sum) <= rango_slider){
        content_slider.css({
            transform: "translateX("+(width_elemento_sum - 1)+"px)"
        });
        $(".wrap_slider_scroll .btn_horizontal.btn_right").removeClass('disable');
        if (Math.abs(width_elemento_sum) == 0){
            $(".wrap_slider_scroll .btn_horizontal.btn_left").addClass('disable');
        }else{
            $(".wrap_slider_scroll .btn_horizontal.btn_left").removeClass('disable');
        }
    }
}

function destroy_slider(){
    if (interval !== ''){
        clearInterval(interval);
    }
}


$(document).on("click",".wrap_slider_scroll .btn_horizontal.btn_right",function() {
    slider_scroll_derecha();
    // clearInterval(interval);
    // autoplay();
});

$(document).on("click",".wrap_slider_scroll .btn_horizontal.btn_left",function() {
    slider_scroll_izquierda();
    // clearInterval(interval);
    // autoplay();
});