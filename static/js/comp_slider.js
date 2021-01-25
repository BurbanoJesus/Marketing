// SLIDER
var slider = '';
var interval = '';
var sections = [];
var section_active = 0;
var flag = true;

function init_slider(){
    slider = $('.slider_full_start');
    sections = slider.find('section');
    panel = slider.find('.btn_panel .circle');
    slider_length = sections.length;
    // console.log(section_active.index());
}

init_slider();

function moverD(){
    console.log(flag);
    if (flag == true) {
        section_active = slider.find('section.active').eq(0).index();
        if (section_active < slider_length - 1){
            section_next = section_active + 1;
        }else{
            section_next = 0;
        }
        sections.eq(section_active).removeClass('active');
        panel.eq(section_active).removeClass('active');
        panel.eq(section_next).addClass('active');
        // console.log(section_active);
        interval = setTimeout(function(){
            sections.eq(section_next).addClass('active');
            flag = true;
        },400);
        flag = false;
    }
}

function moverI(){
    if (flag == true) {
        section_active = slider.find('section.active').eq(0).index();
        if (section_active != 0){
            section_next = section_active - 1;
        }else{
            section_next = slider_length - 1;
        }
        console.log(section_next);
        sections.eq(section_active).removeClass('active');
        panel.eq(section_active).removeClass('active');
        panel.eq(section_next).addClass('active');
        // console.log(section_active);
        interval = setTimeout(function(){
            sections.eq(section_next).addClass('active');
            flag = true;
        },400);
        flag = false;
    }
}

function panel_circle(elemento){
    if (flag == true) {
        section_active = slider.find('section.active').eq(0).index();
        section_next = elemento;
        sections.eq(section_active).removeClass('active');
        panel.eq(section_active).removeClass('active');
        panel.eq(section_next).addClass('active');
        // console.log(section_active);
        interval = setTimeout(function(){
            sections.eq(section_next).addClass('active');
            flag = true;
        },400);
        flag = false;
    }
}

function autoplay() {
    if (sections.length > 1 && slider_move == false) {
        interval = setInterval(function(){
            moverD();
        }, 2000);
    }
}

function destroy_slider(){
    if (interval !== ''){
        clearInterval(interval);
    }
}


$(document).on("click",".slider_full_start .btn_horizontal.btn_right",function() {
    moverD();
    // clearInterval(interval);
    // autoplay();
});

$(document).on("click",".slider_full_start .btn_horizontal.btn_left",function() {
    moverI();
    // clearInterval(interval);
    // autoplay();
});

$(document).on("click",".slider_full_start .btn_panel .circle",function() {
    elemento = $(this).index();
    panel_circle(elemento);
    // clearInterval(interval);
    // autoplay();
});

$(document).on("mouseenter mousedown",".slider", function(e){
    if (sections.length > 1) {
        clearInterval(interval);
    }
});

$(document).on("mouseleave",".slider", function(e){
    if (sections.length > 1) {
        clearInterval(interval);
        autoplay();
    }
});