

console.log("Bonjour, je suis contente que vous regardiez ma console.");

$flag = true;
$flag_menu = true;

//jQuery
$(document).ready(function() {

	$btn_apropos = $('#btnApropos');
	$p_apropos = $('.fiftyRightP');

	$btn_apropos.click(function(event) 
	{
		if ($flag == true) {
			$p_apropos.css('display', 'block');
			$flag = false;
		}
		else if ($flag == false)
		{
			$p_apropos.css('display', 'none');
			$flag = true;
		}
	});

	$btn_menu = $('#btnMenu');
	$menu = $('.navUl');
	$menu_items = $('.navLi');

	$btn_menu.click(function(event) 
	{
		console.log("before click : "+$flag_menu)
		if ($flag_menu == true)
		{
			$menu.css('display', 'block');
			$flag_menu = false;
			console.log("after open click :"+$flag_menu);
		}
		else if ($flag_menu == false)
		{
			$menu.css('display', 'none');
			$menu.css({
				display: 'none',
				margin: '20px auto'
			});
			$flag_menu = true;
			console.log("after close click :"+$flag_menu);
		}
	});
	



//fin jQuery
});
