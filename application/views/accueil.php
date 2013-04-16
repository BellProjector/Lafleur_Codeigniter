<!DOCTYPE html>
<html>
    <head>
         <title>LaFleur 2013</title>
        <meta http-equiv="Content-Language" content="fr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/cssGeneral.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript" src="css/mootools-1.2-core.js"></script>
<script language="javascript" type="text/javascript" src="css/mootools-1.2-more.js"></script>
<script language="javascript" type="text/javascript">
	window.addEvent('domready', function(){
		$('drop_down_menu').getElements('li.menu').each( function( elem ){
			var list = elem.getElement('ul.links');
			var myFx = new Fx.Slide(list).hide();
			elem.addEvents({
				'mouseenter' : function(){
					myFx.cancel();
					myFx.slideIn();
				},
				'mouseleave' : function(){
					myFx.cancel();
					myFx.slideOut();
				}
			});
		})
	});
</script>
    </head>
    <body>
        
        <?php $this->load->view('parties/v_bandeau');?>
        &nbsp;
        &nbsp;
        
        
        <?php $this->load->view('parties/v_accueil');?>
        <?php $this->load->view('parties/v_copywright');?>
        
    </body>
</html>
