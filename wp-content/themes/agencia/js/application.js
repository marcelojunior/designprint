

$(document).ready(function(){

  //Slide megapower do quem somos
  $('.fotos-nav .menos').click(function(){
    $('.fotos1').show('slow');
    $('.fotos2').hide();
    $('.fotos-nav .menos').hide();
    $('.fotos-nav .mais').show();
  });

  $('.fotos-nav .mais').click(function(){
    $('.fotos1').hide();
    $('.fotos2').show('slow');
    $('.fotos-nav .menos').show();
    $('.fotos-nav .mais').hide();
  });

  // Rolagem do menu
  // $('.menu-header a, .menu a, #footer-top a').click(function(){
  //   $('body').scrollTo($($(this).attr('href')), 800);
  // });
  $('.menu-header ul, .menu').onePageNav();

  //Parallax
  $('.coco1, .coco4, .coco2, .coco3').parallax({
    mouseport: $("#quemsomos .cocos")
  });

  $(".slidetabs_clientes").tabs(".logos > .items", {
    rotate: true
  }).slideshow({
    clickable: false
  });


  aplica_overlay();

  $(".slidetabs").tabs(".images > .slidetab_header", {
    rotate: true
  }).slideshow({
    clickable: false
  });

  $(".selectitems[title=1]").text("Todos");

  $("a[rel]").live('click', function (e) {
    e.preventDefault(); //prevent default link action

    $(this).overlay({
      mask: {
        color: '#232323',
        loadSpeed: 200,
        opacity: 0.9
      },
      closeOnClick: false,
      api: true,
      onBeforeLoad: function () {
        var wrap = this.getOverlay().find(".contentWrap");
        wrap.load(this.getTrigger().attr("href"));
      },
      load: true
    });
  });

  $(".images div[rel]").live('click', function (e) {
    e.preventDefault(); //prevent default link action

    $(this).overlay({
      mask: {
        color: '#232323',
        loadSpeed: 200,
        opacity: 0.9
      },
      closeOnClick: false,
      api: true,
      onBeforeLoad: function () {
        var wrap = this.getOverlay().find(".contentWrap");
        wrap.load(this.getTrigger().attr("href"));
      },
      load: true
    });
  });

});

$(document).ajaxStop(function(){
   aplica_overlay();
});


function aplica_overlay(){
  $(".imgs a[rel]").overlay({
      mask: {
        color: '#232323',
        loadSpeed: 200,
        opacity: 0.9
      },
      closeOnClick: false
    });

  $('.fotos img[rel]').overlay({
    mask: {
        color: '#232323',
        loadSpeed: 200,
        opacity: 0.9
      }
  });
};