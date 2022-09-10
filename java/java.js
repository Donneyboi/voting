$(document).ready(function () {
	        $('.showsidediv').on('click',function () {
		$('.sidediv').show();
	        })


		$('.v').on('click',function () {
		$('.vote').show();
		$('.news').hide();
		$('.about').hide();
		$('.contact').hide();
	        $('.sidediv').hide();
	        })

	        $('.n').on('click',function () {
		$('.vote').hide();
		$('.news').show();
		$('.adimsidediv').css({"display":"flex"});
		$('.about').hide();
		$('.contact').hide();
		$('.sidediv').hide();
                })



		$('.a').on('click',function () {
		$('.vote').hide();
		$('.news').hide();
		$('.about').show();
		$('.contact').hide();
	        $('.sidediv').hide();
                 })


		$('.c').on('click',function () {
		$('.vote').hide();
		$('.news').hide();
		$('.about').hide();
		$('.contact').show();
	        $('.sidediv').hide();
	        })

		//from code
		$('.login').hide();
		$('.showlog').on('click',function () {
		$('.reg').hide();
	        $('.login').show();
	        $('.login').css({"display":"flex"});

	        })
	
		$('.showreg').on('click',function () {
		$('.reg').show();
	        $('.login').hide();
	        })
//this code is for admin

//showsdminsidediv
        $('.showsdminsidediv').on('click',function () {
	$('.adimsidediv').hide();
	$('.adimsidediv').css({"display":"flex"});

	})

	        $('.dashboardds').on('click',function () {
		$('.dashboardd').show();
 	        $('.adminpost').hide();
                $('.newadim').hide();
		$('.adimsidediv').hide();

	          })

	 $('.postadim').on('click',function () {
	 $('.dashboardd').hide();
 	 $('.adminpost').show();
 	 $('.adminpost').css({"display":"flex"});
         $('.newadim').hide();
	 $('.adimsidediv').hide();

	 })

        $('.anews').on('click',function () {
	$('.dashboardd').hide();
        $('.adminpost').hide();
        $('.newadim').show();
        $('.newadim').css({"display":"flex"});
	$('.adimsidediv').hide();

	})






})