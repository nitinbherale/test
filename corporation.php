<?php 
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="cache-control" content="no-cache" />
<meta name="publisher" content="Newsmax Multimedia Private Limited" />
<meta name="copyright" content="Newsmax Multimedia Private Limited" />
<meta name="author" content="Design: Newsmax Multimedia Private Limited (www.nmpl.biz) / Modified: Sagar M. Pardeshi" />
<meta name="distribution" content="global" />
<meta name="description" content="Official Website Of Kalyan Dombivli Municipal Corporation, KDMC Mahapalika, KDMC, Municipal Corporation Of Kalyan Dombivli."/>
<meta name="keywords" content="Kalyan Dombivli Municipal Corporation, Official Website, KDMC, Kalyan, Dombivli, Municipal Corporation, Bombay Provincial Municipal Corporation Act 1949, KDMC Commissioner, KDMC Mayor, Standing Committee, Ward Committee, Transport Committee, RTI, Services,  Newsmax Multimedia Pvt Ltd."/>

<title>KDMC | Corporation</title>

<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/superfish.css"/>

<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.preloader.js"></script>

<script type="text/javascript" src="js/jquery.totemticker.js"></script>

<script type="text/javascript">
jQuery(document).ready(function(){
    jQuery("ul.sf-menu").superfish({
        animation:   {opacity:'show',height:'show'}
    }); 
    
    jQuery(".imageloader").preloader();
    
    jQuery('#departments').totemticker({
		next		:	'#dept_ticker_next',
		previous	:	'#dept_ticker_previous',
		mousestop	:	true,
		direction	:	'down',
        interval	:	4000
	});
    
    
    
    if(jQuery('body').hasClass("corporation_page"))
    {
        jQuery(".about_menu").addClass("active");
        jQuery(".kdmc_authorities").addClass("auth_active");
        jQuery(".corporation").addClass("auth_active");
    }
   
    jQuery(".sf-menu li:last-child a").css("background","none");
    jQuery(".sf-menu li li:last-child").css("border-bottom","0px none");
});
</script>

<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->

<?php 
   
   $resultArray=array();
   $MyQuery="select * from tbl_cms_main where subsectionid=62";
echo $resultQueryFinal=mysql_query($MyQuery);

	//	$Ttl=mysql_num_rows($resultQueryFinal);	
		if(count($resultQueryFinal)>0)
		{
			while($RwGtAlSbmsn=mysql_fetch_array($resultQueryFinal))
			{
				array_push($resultArray,$RwGtAlSbmsn);
			}
		}
   
   
   ?> 

</head>

<body class="corporation_page">
<div id="wrapper">
    <div id="header_bg">
    
        <!--top header start-->
        <header>
            <?php include("blocks/top_header_menus.php") ?>
        </header>
        <!--top header end-->
    
        <div class="main_shadow_bg">
            <div class="main_container">
            
                <!--main menus start-->
                <header id="header_menu">
                    <?php include("blocks/header_menus.php") ?>
                </header>
                <!--main menus end-->
            
                <section class="mid_content">
                    <div class="content_div">
                        <!--heading start-->
                        <div class="inside_left_section">
                            <div class="heading_bg">
                                <h2>about kdmc</h2>
                                
                                <div class="breadcrumb">
                                    <a href="index.php">Home</a> &gt; <a href="#">About KDMC</a> &gt; <span class="active_breadcrumb">Corporation</span>
                                </div>
                            </div>
                            
                            <?php echo $resultArray[0]['content'];?>
                        <!--<div class="page_title">
                                <h2>Corporation</h2>
                            </div>
                            
                            <article>
                                <p class="pt10">Kalyan Dombivli Municipal Corporation is governed by Bombay Provincial Municipal Corporation Act 1949. There are following AUTHORITIES which are charged with carrying out the provisions of the act, namely -</p>
                                
                                <ul class="pt20">
                                    <li style="list-style: decimal inside;">A Corporation</li>
                                    <li style="list-style: decimal inside;">A Standing Committee</li>
                                    <li style="list-style: decimal inside;">Ward Committees</li>
                                    <li style="list-style: decimal inside;">Municipal Commissioner</li>
                                </ul>
                                
                                <p class="pt20">
                                Kalyan Dombivli Municipal Corporation has established the
Transport Undertaking in 1997. In order to carry out the provisions related to the Transport Undertaking there are two AUTHORITIES namely
                                </p>
                                
                                <ul class="pt20">
                                    <li style="list-style: decimal inside;">A Transport Committee</li>
                                    <li style="list-style: decimal inside;">A Transport Manager</li>
                                </ul>
                            </article>
                            
                            -->
                            
                        </div>
                        <!--heading end-->
                    
                        <div class="inside_right_section">
                            <?php include("blocks/search_section.php") ?>
                            
                            <div class="cl pt28">
                                <?php include("blocks/about_kdmc.php") ?>
                            </div>
                            
                            <div class="cl pt20">
                                <a href="#"><img src="images/common/ad_banner1.jpg" width="250" height="250" alt=""/></a>
                            </div>
                            
                            <!--KDMC departments start-->
                            <?php include("blocks/kdmc_departments.php") ?>
                            <!--KDMC departments end-->
                            
                            <div class="cl pt20">
                                <a href="#"><img src="images/common/ad_banner3.jpg" width="250" height="250" alt=""/></a>
                            </div>
                        </div>
                    
                    </div>
                    
                </section>
            </div>
            
        </div>
        
    </div>
    
    <!--footer start-->
    <?php include("blocks/footer.php") ?>
    <!--footer end-->
</div>


</body>
</html>