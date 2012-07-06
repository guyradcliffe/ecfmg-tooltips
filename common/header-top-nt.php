<?
$changeTitle="";
$type="";
$currentpage="";
$base="";
$link="";
$backtotop="";

	if($_SERVER['REQUEST_URI']=="/index.html"){
		$changeTitle = "ECFMG&reg; | Educational Commission for Foreign Medical Graduates";
    $type = "home";
  }else if($_SERVER['REQUEST_URI']=="/contact.html"){
		$changeTitle = "ECFMG | Contact ECFMG";
    $breadcrumb = "<a href='/'>Home</a> > Contact ECFMG";
  }else if($_SERVER['REQUEST_URI']=="/sitemap.html"){
		$changeTitle = "ECFMG | Sitemap";
    $breadcrumb = "<a href='/'>Home</a> > Sitemap";	
    
   

  }else if($_SERVER['REQUEST_URI']=="/applicant-portal.html"){
		$changeTitle = "ECFMG | Applicant Portal";
    $breadcrumb = "<a href='/'>Home</a> > Applicant Portal";
	
  }else if($_SERVER['REQUEST_URI']=="/search-results.html"){
		$changeTitle = "ECFMG | Search Results";
    $breadcrumb = "<a href='/'>Home</a> > Search Results";	
	
  }else if($_SERVER['REQUEST_URI']=="/programs/"){
		$changeTitle = "ECFMG | Programs";
    $breadcrumb = "<a href='/'>Home</a> > Programs > Overview";
  }else if($_SERVER['REQUEST_URI']=="/programs/index.html"){
		$changeTitle = "ECFMG | Programs";
    $breadcrumb = "<a href='/'>Home</a> > Programs > Overview";
  }else if($_SERVER['REQUEST_URI']=="/programs/irregular-behavior.html"){
		$changeTitle = "ECFMG | Programs | Irregular Behavior";
    $breadcrumb = "<a href='/'>Home</a> > <a href='/programs/'>Programs</a> > Irregular Behavior";
  }else if($_SERVER['REQUEST_URI']=="/programs/irregular-examples.html"){
		$changeTitle = "ECFMG | Programs | Irregular Behavior";
    $breadcrumb = "<a href='/'>Home</a> > <a href='/programs/'>Programs</a> > Irregular Behavior";
  }else if($_SERVER['REQUEST_URI']=="/programs/performance-data-provision.html"){
		$changeTitle = "ECFMG | Provision of USMLE Performance Data to International Medical Schools";
    $breadcrumb = "<a href='/'>Home</a> > <a href='/programs/'>Programs</a> > Provision of USMLE Performance Data to International Medical Schools";
    $metadescription = "";	 
    
  // ONLINE SERVICES OVERVIEW PAGE 						
	}else if($_SERVER['REQUEST_URI']=="/onlines-ervices/"){
		$changeTitle = "ECFMG | On-line Services";
    $type = "onlineservices";
    $breadcrumb = "<a href='/'>Home</a> > On-line Services";
    $currentpage = "online-services-index";
  }else if($_SERVER['REQUEST_URI']=="/online-services/index.html"){
		$changeTitle = "ECFMG | On-line Services";
    $type = "onlineservices";
    $breadcrumb = "<a href='/'>Home</a> > On-line Services";
    $currentpage = "online-services-index";
  }else if($_SERVER['REQUEST_URI']=="/online-services-emswp.html"){
		$changeTitle = "ECFMG | On-line Services: ECFMG Medical School Web Portal (EMSWP)";
    $type = "onlineservices";
    $breadcrumb = "<a href='/'>Home</a> > <a href='/online-services/index.html'>On-line Services</a> > EMSWP";
    $currentpage = "online-services-emswp";
	


   // NEWS 
  }else if($_SERVER['REQUEST_URI']=="/news.html"){
		$changeTitle = "ECFMG | News";
    $breadcrumb = "<a href='/'>Home</a> > News";
  } else {
    $changeTitle = "ECFMG&reg; | Educational Commission for Foreign Medical Graduates";
    $type = "home";
  }

?>

<!DOCTYPE html><!-- html 5 doctype -->
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <?php if($_SERVER['REQUEST_URI']=="/online-services/index.html"||"/online-services"){?>
      <meta name="description" content="OASIS, On-line Applicant Status and Information System, IWA, IMED, Step 2 CS Calendar and Scheduling, Interactive Web Applications, International Medical Education Directory" />
      <?php ;}?>
      <title><? echo $changeTitle; ?></title>
      <base href="http://<? if ($_SERVER['SERVER_ADDR']=='10.1.3.136') {echo 'test.ecfmg.org' ;} else {echo 'www.ecfmg.org' ;} ?>" />
      <link rel="shortcut icon" href="images/ecfmg.favicon.ico" type="image/vnd.microsoft.icon" />
      <link rel="icon" href="images/ecfmg.favicon.ico" type="image/vnd.microsoft.icon" />
      
      <link rel="stylesheet" href="css/ecfmg.reset.css" type="text/css" /><!-- defines browser defaults -->
      <link rel="stylesheet" href="css/ecfmg.text.css" type="text/css" />
      <link rel="stylesheet" href="css/ecfmg.print.css" type="text/css" media="print" />
      <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" /><!-- provides a lightbox style effect for jQuery (if necessary) -->
      <link rel="stylesheet" href="css/ecfmg.main.css" type="text/css" media="screen" />
      
      <script src="jquery_library_1.4.2/jquery.min.js"></script><!-- jquery library v 1.4.2 must load first -->
      <script src="jquery_tools_1.2.5/jquery.tools.min.js"></script><!-- jquery tools (flowplayer) v 1.2.5 must load after jquery library -->
      <script src="js/jquery.cycle.all.js" type="text/javascript"></script><!-- for 'Cycle' home page image rotation from malsup.com -->
      <script src="js/jquery.prettyPhoto.js"></script><!-- jQuery compatible lightbox clone -->
      <script src="scripts/scrolltoanchor.js"></script><!-- jQuery compatible scroll to top  -->
      <script type="text/javascript" src="jwplayer/swfobject.js"></script><!-- for jwplayer -->
      <script type="text/javascript" src="jwplayer/jwplayer.js"></script><!-- for jwplayer -->
      <script type="text/javascript" src="js/jquery.scrollTo-min.js"></script><!-- for contact page vertical scroll feature -->     
      <script src="js/jquery.cycle.all.js"></script><!-- script for the new image rotation -->
      
      <script type="text/javascript"><!--
        function aboutHover() {
            var divRoll = document.getElementById("aboutId");
            divRoll.className = "aboutOver";
        }
        
        function aboutUnhover() {
            var divRoll = document.getElementById("aboutId");
            divRoll.className = "about";
        }
        // end hiding javascript if disabled by the user -->

        <!-- Begin
        function popUpForm(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=1,menubar=0,resizable=0,width=375,height=540');");
        }
        function popUpForm2(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=1,menubar=0,resizable=0,width=450,height=340');");
        }
        function popUp180(URL) {
        day = new Date();
        id = day.getTime();
        eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=1,menubar=0,resizable=0,width=500,height=530');");
        }
        
        // USED FOR ALL JS POP UPS ON RESOURCES FORMS PAGE
        function popitup(url) {
        window.open(url,'name','toolbar=0,scrollbars=0,location=0,statusbar=1,menubar=0,resizable=0,width=550,height=450');
        }
        
        function popitup650(url) {
        window.open(url,'name','toolbar=0,scrollbars=0,location=0,statusbar=1,menubar=0,resizable=0,width=800,height=650');
        }
        
        // USED FOR ALL JS POP UPS ON FEES PAGE
        function popitup2(url) {
        window.open(url,'name','toolbar=0,scrollbars=0,location=0,statusbar=1,menubar=0,resizable=0,width=375,height=540');
        }
        // End -->

      </script>
      
      <script type="text/javascript" src="scripts/switchcontent.js">
/***********************************************
* Switch Content script- (c) Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
	</script>


<!-- Google Analytics asynchronous tracking script -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15999563-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>      
  </head>
  <body>
  <div class="grid_980">
    <? include ("common/tooltips-nt.php"); ?>    
    <!---->
    <?= $_SERVER['REQUEST_URI']==="index.html" || $_SERVER['REQUEST_URI']==="index.php" || $_SERVER['PHP_SELF']==="/error404.php" || $_SERVER['REQUEST_URI']==="/" ? '' : '<div class="breadcrumb">' . $breadcrumb . '</div>'; ?>

  <?// echo $_SERVER['SERVER_ADDR']."<br />"; ?>
  <?// echo $_SERVER['SERVER_NAME']."<br />"; ?>
  <?// echo $_SERVER['SERVER_ADDR']."<br />"; ?>
  <?// echo $_SERVER['REQUEST_URI']."<br />"; ?>
  <?// echo $_SERVER['PHP_SELF']."<br />"; ?>
  <?// echo "The type is:" . $type ."<br />"; ?>
  
  <!--<div id="cse" class="googlesearch"></div>--> <!-- class="googlesearch" -->
