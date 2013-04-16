

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

	<H3>Creation d'un(e) nouvel(le) utilisateur</H3>
	<p>Veillez remplir les cases suivantes:</p>

    <?php echo form_open("authentification");?>
        <p>
           <?php
      echo form_label('Identifiant exemple (c0005): ', 'clt_code');
      echo form_input('clt_code', set_value('clt_code'), 'id="code" autofocus');
   ?>
        </p>
             <p>
           <?php
      echo form_label('Nom: ', 'clt_nom');
      echo form_input('clt_nom', set_value('clt_nom'), 'id="nom"');
   ?>
        </p>
             <p>
           <?php
      echo form_label('Adresse: ', 'clt_adresse');
      echo form_input('clt_adresse', set_value('clt_adresse'), 'id="adresse"');
   ?>
        </p>
             <p>
           <?php
      echo form_label('Numero de telephone: ', 'clt_tel');
      echo form_input('clt_tel', set_value('clt_tel'), 'id="tel"');
   ?>
        </p>
        
        <p>
      <?php
      echo form_label('Adresse email: ', 'clt_email');
      echo form_input('clt_email', set_value('clt_email'), 'id="email"');
   ?>
</p>

<p>
   <?php
      echo form_label('Mot de passe:', 'clt_motPasse');
      echo form_password('clt_motPasse', '', 'id="password"');
   ?>
</p>

<p>
   <?php echo form_submit('submit', 'Connexion'); ?>
</p>
<?php echo form_close(); ?>

<?php echo validation_errors(); ?>

 <?php $this->load->view('parties/v_copywright');?>

    </body>
</html>

