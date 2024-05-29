$(document).ready(function () {

    var section = $('.section');

    section.on('scrollSpy:enter', function () {
        $(this).addClass('section--show animated fadeInUp');
    });

    section.scrollSpy();
});

function closeModal() {
    var modal = document.getElementById("myModal--1");
    modal.style.display = "none";
}


function closePreloader(){
    var preloader = document.getElementById('preloader');
    preloader.style.display = 'none';
}