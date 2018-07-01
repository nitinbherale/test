<?php 
include("connect.php");
$newsid=$_GET['id'];
$resultArray=array();
$resultImg=array();
	$queryFinal="select * from tbl_news_data where id=$newsid and status=0";
		$resultQueryFinal=mysqli_query($dblink,$queryFinal);
		if(mysqli_num_rows($resultQueryFinal)>0)
		{
			while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal,MYSQL_ASSOC))
			{
				array_push($resultArray,$RwGtAlSbmsn);
			}
		}
        
        
      $query="select * from tbl_news_images where news_id=$newsid and status=0";  
      
      	$resultQuery=mysqli_query($dblink,$query);
		if(mysqli_num_rows($resultQuery)>0)
		{
			while($RwGtAlSbmsn1=mysqli_fetch_array($resultQuery,MYSQL_ASSOC))
			{
				array_push($resultImg,$RwGtAlSbmsn1);
               // print_r($resultImg);
			}
		}
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

<title>Kalyan Dombivli Municipal Corpration | News</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/superfish.css"/>   <!--superfish menu css-->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css"/>  <!--fancybox css-->
<!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
    

</head>

<body class="news_page">
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
                                <h2>News</h2>
                                
                                <div class="breadcrumb">
                                    <a href="index.php">Home</a> &gt; <a href="news.php">News</a> &gt; <span class="active_breadcrumb">News Title</span>
                                </div>
                            </div>
                            
                            <!--news section start-->
                            <article class="news">
                                <h3><?php echo $resultArray[0]['title'];?><span class="pl5"><br /><?php echo ucfirst($resultArray[0]['location']);?>,  <?php $dt=strtotime($resultArray[0]['date']);echo $dt1=date('F d, Y',$dt);?></span></h3>
                                
                                <div class="cl pt10">
                                    <p><?php echo $resultArray[0]['news_data'];?></p>
                                    
                                    <?php if(count($resultImg)>0){ ?> 
                                    <ul class="image_gal">
                                        <?php for($i=0;$i<count($resultImg);$i++)
                                        {
                                        ?>
                                        <li class="imageloader img_bor">
                                            <a href="uploadimg/<?php echo $resultImg[$i]['image_name'];?>" class="fancybox" data-fancybox-group="gallery">
                                                <img src="uploadimg/<?php echo $resultImg[$i]['image_name'];?>" width="195" height="131" alt=""/>
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <!--<li class="imageloader img_bor">
                                            <a href="images/news/news_img1.jpg" class="fancybox" data-fancybox-group="gallery">
                                                <img src="images/news/news_img1.jpg" width="200" height="131" alt=""/>
                                            </a>
                                        </li>
                                        
                                        <li class="imageloader img_bor">
                                            <a href="images/news/news_img1.jpg" class="fancybox" data-fancybox-group="gallery">
                                                <img src="images/news/news_img1.jpg" width="200" height="131" alt=""/>
                                            </a>
                                        </li>-->
                                    </ul>
                                    <?php } ?>
                                </div>
                            <article>
                            
                            <!--news section end-->
                            
                        </div>
                        <!--heading end-->
                    
                        <div class="inside_right_section">
                            <?php include("blocks/search_section.php") ?>
                            
                            <div class="cl pt5">
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
<script type="text/javascript" src="js/jquery.preloader.js"></script>  <!--imageloader js-->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>   <!--fancybox js-->
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
    
    if(jQuery('body').hasClass("news_page"))
    {
        jQuery(".news_menu").addClass("underline");
    }
   
    jQuery(".sf-menu li:last-child a").css("background","none");
    jQuery(".sf-menu li li:last-child").css("border-bottom","0px none");
    
    jQuery('.fancybox').fancybox();
});
</script>

</body>
</html>