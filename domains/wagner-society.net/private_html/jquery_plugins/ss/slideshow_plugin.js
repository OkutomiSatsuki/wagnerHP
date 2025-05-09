(function ($) {

	$.fn.slideshow = function (options) {

		var opts = $.extend({}, $.fn.slideshow.defaults, options);

		var img_w = opts.img_w;
		var img_h = opts.img_h;
		var f_speed = opts.f_speed;
		var cng_interval = opts.cng_interval;
		var img_dir = opts.img_dir;
		var img_type = opts.img_type;
		var bg_col = opts.bg_col;
		var f_img = opts.f_img;
		var img_num = opts.img_num;

		var si = 1;
		var t = null;


		var img_cng_div = $(this);
		img_cng_div.css({ borderStyle : "none", width : img_w+"px", height : img_h+"px", padding : "0px", background: "url("+img_dir+"loading.gif) no-repeat center center", backgroundColor : bg_col });


		var img = new Array();

		img[0] = $("<img />");
		img[0].attr({ src : img_dir+f_img, alt : "Frame" })
		      .css({ borderStyle : "none", width : img_w+"px", height : img_h+"px", display : "none", position : "absolute", zIndex : 2 });
		img_cng_div.append(img[0]);


		var i;
		for (i = 1; i <= img_num; i++) {
			img[i] = $("<img />");
			img[i].attr({ src : img_dir+i+"."+img_type, alt : i })
			      .css({ width : img_w+"px", height : img_h+"px", borderStyle: "none", display : "none", position : "absolute", zIndex : 1 });
			img_cng_div.append(img[i]);
		}


		$(window).load(function () {
			img_cng_div.css({ background: "", backgroundColor : bg_col });
			img[0].show();
			img[1].fadeIn(f_speed);
			if (t==null) { t = setInterval(img_cng, cng_interval); }
		});


		$(window).focus(function () {
			img[si].fadeIn(f_speed);
			if (t==null) { t = setInterval(img_cng, cng_interval); }
		});

		$(window).blur(function () {
			img[si].hide();
			clearInterval(t);
			t = null;
		});

		function img_cng() {
			img[si].fadeOut(f_speed);

			if (si < img_num){
				si++;
			} else {
				si = 1;
			}

			img[si].fadeIn(f_speed);
		}

	};

	$.fn.slideshow.defaults = {
		img_w:        900, 
		img_h:        400,
		f_speed:      3000,
		cng_interval: 5000,
		img_dir:      'images/',
		img_type:     'jpg',
		bg_col:       '#000000',
		f_img:        'frame.png',
		img_num:      10
	};

})(jQuery);