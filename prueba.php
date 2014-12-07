<!DOCTYPE html>
<html>
  <head>
    <title>Twitter Bootstrap Wizard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Twitter Bootstrap Wizard Plugin">
	<meta name="author" content="Raul">
    <!-- Bootstrap -->
    <link href="rootwizard/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
	      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->

  	    
  </head>
  <body>
    <div id="rootwizard">
    <div class="navbar">
    <div class="navbar-inner">
    <div class="container">
    <ul>
    <li><a href="#tab1" data-toggle="tab">First</a></li>
    <li><a href="#tab2" data-toggle="tab">Second</a></li>
    <li><a href="#tab3" data-toggle="tab">Third</a></li>
    <li><a href="#tab4" data-toggle="tab">Forth</a></li>
    <li><a href="#tab5" data-toggle="tab">Fifth</a></li>
    <li><a href="#tab6" data-toggle="tab">Sixth</a></li>
    <li><a href="#tab7" data-toggle="tab">Seventh</a></li>
    </ul>
    </div>
    </div>
    </div>
    <div class="tab-content">
	    <div class="tab-pane" id="tab1">1</div>
	    <div class="tab-pane" id="tab2">2</div>
	    <div class="tab-pane" id="tab3">3</div>
	    <div class="tab-pane" id="tab4">4</div>
	    <div class="tab-pane" id="tab5">5</div>
	    <div class="tab-pane" id="tab6">6</div>
	    <div class="tab-pane" id="tab7">7</div>
	    <ul class="pager wizard">
		    <li class="previous first"><a href="javascript:;">First</a></li>
		    <li class="previous"><a href="javascript:;">Previous</a></li>
		    <li class="next last"><a href="javascript:;">Last</a></li>
		    <li class="next"><a href="javascript:;">Next</a></li>
		    <li class="next finish" style="display:none;"><a href="javascript:;">Finish</a></li>
	    </ul>
    </div>	
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="rootwizard/bootstrap/js/bootstrap.min.js"></script>
	<script src="rootwizard/jquery.bootstrap.wizard.js"></script>
	<script type="text/javascript">

    $(document).ready(function() {
    $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
    var $total = navigation.find('li').length;
    var $current = index+1;
    var $percent = ($current/$total) * 100;
    $('#rootwizard').find('.bar').css({width:$percent+'%'});
    // If it's the last tab then hide the last button and show the finish instead
    if($current >= $total) {
    $('#rootwizard').find('.pager .next').hide();
    $('#rootwizard').find('.pager .finish').show();
    $('#rootwizard').find('.pager .finish').removeClass('disabled');
    } else {
    $('#rootwizard').find('.pager .next').show();
    $('#rootwizard').find('.pager .finish').hide();
    }
    }});
	    $('#rootwizard .finish').click(function() {

		    $('#rootwizard').find("a[href*='tab3']").trigger('click');
	    });
    });
   </script>
 </body>
</html>
