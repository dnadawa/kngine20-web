	// loader
	var loader = function() {
		setTimeout(function() {
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

    windows.addEventlistner('load', () => {
     const preloader = document.querySelector('.ftco-loader');
     preload.classlist.add("preload-finish");
    })

