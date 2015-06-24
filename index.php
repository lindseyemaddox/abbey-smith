 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

	<div class="inner">

		<img id="glasses" src="/_assets/img/glasses.png" alt="Abbey Smith's glasses" title="Abbey Smith's glasses">

	</div><!--inner-->

	<div id="headline">

		<div class="inner">
			
			<h1>We specialize in content development and strategy, editing services, and public relations. With years of experience in advertising and marketing, ASC provides content and marketing solutions to multiple industries—including B2B, B2C, health care/insurance, manufacturing, beauty/wellness, and education, just to name a few.</h1>

		</div><!--inner-->

	</div><!--headline-->

</header>

<section id="main">

	<div class="inner">
		
		<article class="service" id="content-development">
			
			<span class="icon-content-strategy"></span>

			<h2>Content Development</h2>

		</article><!--service-->

		<article class="service" id="competitive-analysis">
			
			<span class="icon-competitive-analyses"></span>

			<h2>Competitive Analysis</h2>

		</article><!--service-->

		<article class="service" id="public-relations">
			
			<span class="icon-public-relations"></span>

			<h2>Public Relations</h2>

		</article><!--service-->

		<article class="service" id="email-marketing">
			
			<span class="icon-marketing-solutions"></span>

			<h2>Email Marketing</h2>

		</article><!--service-->

		<article class="service" id="social-media">
			
			<span class="icon-website-planning"></span>

			<h2>Social Media Management</h2>

		</article><!--service-->

	    <?php
	        $email = $_REQUEST['email'] ;
	        if (isset($_POST['submit'])) {
	          $to = 'lindseyemaddox@gmail.com';
	          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
	          $headers .= "MIME-Version: 1.0\r\n";
	          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	          $message = '<html><body>';
	          $message .= 'Email: '.$email.'<br>';
              if (isset($_POST['social-media'])) {
                  $message .= 'I am interested in social media management.<br>';
                } 
              if (isset($_POST['competitive-analysis'])) {
                  $message .= 'I am interested in competitive analysis.<br>';
                } 
              if (isset($_POST['email-marketing'])) {
                  $message .= 'I am interested in email marketing.<br>';
                } 
              if (isset($_POST['public-relations'])) {
                  $message .= 'I am interested in public relations.<br>';
                } 
              if (isset($_POST['content-development'])) {
                  $message .= 'I am interested in content development.<br>';
                } 
                else {
              }
	          $message .= '</body></html>';
	          $subject = 'Someone is Interested in the Awesomeness that is Abbey Smith Smith.';

	    mail($to, $subject, $message, $headers);
	    echo "<div id='thanks'><label>Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
	  }
	else
	  { echo "<form method='post' action='".$_SERVER['SCRIPT_NAME']."'>

			<div id='box'>
				
				<h3>1. I'm Interested In:</h3>
				<p>(drag boxes here)</p>

			</div><!--box-->

			<h3>2. My Email Address Is:</h3>

			<input type='text' name='email' id='email' size='10' placeholder='(name@domain.com)'>

	        <button class='btn submit' type='submit' name='submit'>3. Contact Abbey</button>

			<input class='content-development' type='checkbox' name='content-development'>
			<input class='competitive-analysis' type='checkbox' name='competitive-analysis'>
			<input class='email-marketing' type='checkbox' name='email-marketing'>
			<input class='social-media' type='checkbox' name='social-media'>
			<input class='public-relations' type='checkbox' name='public-relations'>

		</form>";
		      }
		    ?>

	</div><!--inner-->

</section>

<script>
$(function() {
	$( ".service" ).draggable({
		stop: function( event, ui ) {


		}
	});

  var service = $('.checked').attr('id');
  console.log(service);
  $("input#"+service).attr('checked', true).change();

	$( "#box" ).droppable({
      hoverClass: "clue",
	  drop: function( event, ui ) {
	    $( this )
	      .addClass( "ui-state-highlight" )
	      .find( "p" )
	        .html( "Noted." );
		var $this = ui.draggable;
		var name = $this.attr('id');
		console.log(name);
		$('input[name="' + name + '"').prop('checked', true);
	      
	  }
	});
});



</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>