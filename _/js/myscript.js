$(function() {

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#events a:contains('Events')").parent().addClass('active');
	$("#membership a:contains('Membership')").parent().addClass('active');
	$("#office_bearers a:contains('Office Bearers')").parent().addClass('active');	
	$("#student a:contains('Student Branch')").parent().addClass('active');
	$("#resources a:contains('Resources')").parent().addClass('active');
	$("#downloads a:contains('Downloads')").parent().addClass('active');
	$("#about a:contains('About')").parent().addClass('active');

	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover

}); //jQuery is loaded

$(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });
