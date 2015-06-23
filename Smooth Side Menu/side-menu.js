// Begin Sidebar Menu -- USE WIDGET MENU //
$( "<i class='fa fa-angle-right'></i>" ).prependTo('.widget .menu-item-has-children');

$( ".current-menu-parent").children( 'i' ).addClass('clicked');


$( ".widget .menu-item-has-children" ).children('a').click(function() {
	$( this ).next( 'ul.sub-menu' ).slideToggle();
	$( this ).prev( 'i' ).toggleClass('clicked');
});
$( ".widget .menu-item-has-children" ).children('i').click(function() {
	$( this ).siblings( 'ul.sub-menu' ).slideToggle();
	$( this ).toggleClass('clicked');
});
// End Sidebar Menu //
