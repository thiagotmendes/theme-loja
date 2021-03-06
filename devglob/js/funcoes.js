jQuery(function(a){if("undefined"==typeof woocommerce_price_slider_params)return!1;a("input#min_price, input#max_price").hide(),a(".price_slider, .price_label").show();var b=a(".price_slider_amount #min_price").data("min"),c=a(".price_slider_amount #max_price").data("max"),d=parseInt(b,10),e=parseInt(c,10);woocommerce_price_slider_params.min_price&&(d=parseInt(woocommerce_price_slider_params.min_price,10)),woocommerce_price_slider_params.max_price&&(e=parseInt(woocommerce_price_slider_params.max_price,10)),a(document.body).bind("price_slider_create price_slider_slide",function(b,c,d){"left"===woocommerce_price_slider_params.currency_pos?(a(".price_slider_amount span.from").html(woocommerce_price_slider_params.currency_symbol+c),a(".price_slider_amount span.to").html(woocommerce_price_slider_params.currency_symbol+d)):"left_space"===woocommerce_price_slider_params.currency_pos?(a(".price_slider_amount span.from").html(woocommerce_price_slider_params.currency_symbol+" "+c),a(".price_slider_amount span.to").html(woocommerce_price_slider_params.currency_symbol+" "+d)):"right"===woocommerce_price_slider_params.currency_pos?(a(".price_slider_amount span.from").html(c+woocommerce_price_slider_params.currency_symbol),a(".price_slider_amount span.to").html(d+woocommerce_price_slider_params.currency_symbol)):"right_space"===woocommerce_price_slider_params.currency_pos&&(a(".price_slider_amount span.from").html(c+" "+woocommerce_price_slider_params.currency_symbol),a(".price_slider_amount span.to").html(d+" "+woocommerce_price_slider_params.currency_symbol)),a(document.body).trigger("price_slider_updated",[c,d])}),a(".price_slider").slider({range:!0,animate:!0,min:b,max:c,values:[d,e],create:function(){a(".price_slider_amount #min_price").val(d),a(".price_slider_amount #max_price").val(e),a(document.body).trigger("price_slider_create",[d,e])},slide:function(b,c){a("input#min_price").val(c.values[0]),a("input#max_price").val(c.values[1]),a(document.body).trigger("price_slider_slide",[c.values[0],c.values[1]])},change:function(b,c){a(document.body).trigger("price_slider_change",[c.values[0],c.values[1]])}})});
jQuery(document).ready(function($) {
	$('ul.nav li.dropdown, ul.nav li.dropdown-submenu').hover(function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeIn();
	}, function() {
		$(this).find(' > .dropdown-menu').stop(true, true).delay(200).fadeOut();
	});
});

jQuery(document).ready(function() {
  jQuery('.slider-produtos').slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
     {
       breakpoint: 1024,
       settings: {
         slidesToShow: 3,
         slidesToScroll: 3,
         infinite: true,
         dots: true
       }
     },
     {
       breakpoint: 600,
       settings: {
         slidesToShow: 2,
         slidesToScroll: 2
       }
     },
     {
       breakpoint: 480,
       settings: {
         slidesToShow: 1,
         slidesToScroll: 1
       }
     }
     // You can unslick at a given breakpoint now by adding:
     // settings: "unslick"
     // instead of a settings object
    ]
  });

  jQuery('.bnCategoriaHome').slick({
     dots: false,
     arrows: false,
     autoplay: true,
  });

});

jQuery(document).ready(function($) {
  jQuery('.btn-compra[data-product]').click(function(e) {
     e.preventDefault();
     var produto = $(this).attr("data-product");
     addToCart(produto);
     return false;
  });

  function addToCart(p_id) {
     jQuery.get('?add-to-cart=' + p_id, function() {
       jQuery('#sucesso').modal('show');
      /* $('#sucesso').on('hidden.bs.modal', function () {
           location.reload();
        });*/
     });
  };

	jQuery.post(
	    woocommerce_params.ajax_url,
	    {'action': 'mode_theme_update_mini_cart'},
	    function(response) {
			$('#mode-mini-cart').html(response);
	    }
	);
});
