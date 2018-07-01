<?php include("connect.php");

 $position=$_GET['data'];
$resultArray=array();
//$resultImg=array();
 $queryFinal="select * from tbl_committee where position='".$position."'and status=0";
		$resultQueryFinal=mysqli_query($dblink,$queryFinal);
		if(count($resultQueryFinal)>0)
		{
			while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal,MYSQL_ASSOC))
			{
				array_push($resultArray,$RwGtAlSbmsn);
               // print_r($resultArray);
			}
		}
        
    
?>



.<meta name="distribution" content="global" />
<meta name="description" content="Official Website Of Kalyan Dombivli Municipal Corporation, KDMC Mahapalika, KDMC, Municipal Corporation Of Kalyan Dombivli."/>
<meta name="keywords" content="Kalyan Dombivli Municipal Corporation, Official Website, KDMC, Kalyan, Dombivli, Municipal Corporation, Bombay Provincial Municipal Corporation Act 1949, KDMC Commissioner, KDMC Mayor, Standing Committee, Ward Committee, Transport Committee, RTI, Services,  Newsmax Multimedia Pvt Ltd."/>

<title>Mr.Shankar. S. Bhise Municipal Commissioner Of Kalyan Dombivli Municipal Corporation</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/superfish.css"/>  <!--superfish menu css-->

<!--[if IE 8]>
<style type="text/css">
figcaption{font-size: 12px;}
</style>
<![endif]-->

<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->

</head>


<body class="commissioner_page">
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
                                <h2>Municipal <?php echo $resultArray[0]['position'];?></h2>
                                
                                <div class="breadcrumb">
                                    <a href="index.php">Home</a> &gt; <a href="commissioner.php">Municipal <?php echo $resultArray[0]['position'];?></a> &gt; <span class="active_breadcrumb">Municipal <?php echo $resultArray[0]['position'];?> Details</span>
                                </div>
                            </div>
                            <div class="page_title">
                                <h2><?php echo $resultArray[0]['position'];?> Details</h2>
                            </div>
                            
                            <figure class="fl mt10 imageloader">
                                <img src="uploadimg/<?php echo $resultArray[0]['big_image']; ?>" width="237" height="301" alt="Municipal Commissioner" class="img_bor"/>
                                <figcaption><?php echo $resultArray[0]['name']; ?><br /><?php echo $resultArray[0]['position']; ?>,<br />Kalyan Dombivli Municipal Corporation</figcaption>
                            </figure>
                            
                            <div class="fl width411 ml10">
                                <table cellpadding="0" cellspacing="2" width="411" class="comm_table_style bold mt10">
                                    <tbody>
ewjdhygweftftrf6

ededygdegyd
                                        <tr valign="top">
                                            <td width="195" class="bg990c00">Name</td>
                                            <td width="195"><?php echo $resultArray[0]['name'];?></td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="195" class="bg990c00">Date of Birth</td>
                                            <td width="195"><?php if(count($resultArray[0]['dob'])>0){$dt=strtotime($resultArray[0]['dob']);echo $dt1=date('d.m.Y',$dt);}else echo "";?></td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="195" class="bg990c00">Educational Qualification</td>
                                            <td width="195"><?php echo $resultArray[0]['qualification'];?></td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="195" class="bg990c00">Date of Joining Govt. Service</td>
                                            <td width="195"><?php if(count($resultArray[0]['gov_joining'])>0){$dt=strtotime($resultArray[0]['gov_joining']);echo $dt1=date('d.m.Y',$dt);}else echo "";?></td>
                                        </tr>
                                      <!--  <tr valign="top">
                                            <td width="195" class="bg990c00">Cadre</td>
                                            <td width="195">null</td>
                                        </tr> -->
                                        <tr valign="top">
                                            <td width="195" class="bg990c00">Date of Joining KDMC</td>
                                            <td width="195"><?php if(count($resultArray[0]['kdmc_joining'])>0){$dt=strtotime($resultArray[0]['kdmc_joining']);echo $dt1=date('d.m.Y',$dt);}else echo "";?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="cl pt10">
                                <table cellpadding="0" cellspacing="2" width="668" class="comm_table_style">
                                    <tbody>
                                        <tr valign="top">
                                            <td width="314" class="bg990c00" style="vertical-align: middle;">Career Brief</td>
                                            <td width="343">
                                                <?php echo $resultArray[0]['career_brief'];?>
                                            </td>
                                        </tr>
                                        <tr valign="top">
                                            <td width="314" class="bg990c00" style="vertical-align: middle;">Special Achievements/Awards/Medals Received</td>
                                            <td width="343">
                                                <?php echo $resultArray[0]['achievements'];?>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
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

<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/superfish.js"></script>  <!--superfish menu js-->
<script type="text/javascript" src="js/jquery.preloader.js"></script>    <!--imageloader js-->
<script type="text/javascript" src="js/jquery.totemticker.js"></script>  <!--vertical ticker js-->
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
    
    if(jQuery('body').hasClass("commissioner_page"))
    {
        jQuery(".about_menu").addClass("active");
        jQuery(".kdmc_authorities").addClass("auth_active");
        jQuery(".commissioner").addClass("active");
    }
   
    jQuery(".sf-menu li:last-child a").css("background","none");
    jQuery(".sf-menu li li:last-child").css("border-bottom","0px none");
});
</script>
</body>
</html>