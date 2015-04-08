<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script>
  $(function() {
    $( "#draggable" ).draggable();
    $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  });
  </script>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>
<div id="draggable" class="ui-widget-content">
  <p>Drag me to my target</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>Drop here</p>
</div>
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
    
    <article id="draggable" class="service website-planning">
      
      <span class="icon-website-planning"></span>

      <h2>Website Planning</h2>

    </article><!--service-->

    <article id="draggable" class="service competitive-analyses">
      
      <span class="icon-competitive-analyses"></span>

      <h2>Competitive Analyses</h2>

    </article><!--service-->

    <article id="draggable" class="service information-architecture">
      
      <span class="icon-information-architecture"></span>

      <h2>Information Architecture</h2>

    </article><!--service-->

    <article id="draggable" class="service marketing-solutions">
      
      <span class="icon-marketing-solutions"></span>

      <h2>Marketing Solutions</h2>

    </article><!--service-->

    <article id="draggable" class="service public-relations">
      
      <span class="icon-public-relations"></span>

      <h2>Public Relations</h2>

    </article><!--service-->

    <article id="draggable" class="service content-strategy">
      
      <span class="icon-content-strategy"></span>

      <h2>Content Strategy</h2>

    </article><!--service-->

    <article id="draggable" class="service advertising-strategy">
      
      <span class="icon-advertising-strategy"></span>

      <h2>Advertising Strategy</h2>

    </article><!--service-->

    <article id="draggable" class="service press-releases">
      
      <span class="icon-press-releases"></span>

      <h2>Press <br/>Releases</h2>

    </article><!--service-->

    <div id="droppable">
      
      <h3>1. I'm Interested In:</h3>
      <p>(drag boxes here)</p>

    </div><!--box-->

    <h3>2. My Email Address Is:</h3>

    <input type='text' name='email' id='email' size='10' placeholder='(name@domain.com)'>

        <button class='btn' type='submit' name='submit'>3. Contact Abbey</button>

  </div><!--inner-->

</section>

<script>
$(function() {
  $( "#draggable" ).draggable();
  $( "#droppable" ).droppable({
    drop: function( event, ui ) {
      $( this )
        .addClass( "ui-state-highlight" )
        .find( "p" )
          .html( "Dropped!" );
    }
  });
});
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>