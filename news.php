<?php 
include("connect.php");

   $resultArray=array();
	$queryFinal="select * from tbl_news_data where status=0 and archive=0 order by id desc limit 0,3";
		$resultQueryFinal=mysqli_query($dblink,$queryFinal);
		if(mysqli_num_rows($resultQueryFinal)>0)
		{
			while($RwGtAlSbmsn=mysqli_fetch_array($resultQueryFinal,MYSQL_ASSOC))
			{
				array_push($resultArray,$RwGtAlSbmsn);
              //  print_r($resultArray);
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
<meta name="keywords" content="Kalyan Dombivli Municipal Corporation, Official Website, KDMC, Kalyan, Dombivli, Municipal Corporation, Bombay Provincial Municipal Corporation Act 1949, KDMC Commissioner, KDMC Mayor, Tourist Places in KDMC, Siddhivinayak Ganapati Mandir Titwala, Lonad, Malang Gadh, Durgadi Fort, Newsmax Multimedia Pvt Ltd."/>

<title>Kalyan Dombivli Municipal Corpration | City | Tourist Places</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/superfish.css"/>  <!--superfish menu css-->
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
                                    <a href="index.php">Home</a> &gt; <span class="active_breadcrumb">News</span>
                                </div>
                            </div>
                           
                       
                         <ul class="list_news">
                          <?php 
                            if(count($resultArray)>0)
                            {
                                for($i=0;$i<count($resultArray);$i++)
                                {
                          ?>
                            <li>
                                <h3><a href="news_inside.php?id=<?php echo $resultArray[$i]['id'];?>" class="c000"><?php echo $resultArray[$i]['title'];?></a><br /> <span><?php echo ucfirst($resultArray[0]['location']);?>, <?php $dt=strtotime($resultArray[$i]['date']);echo $dt1=date('F d, Y',$dt);?></span></h3>
                                <figure class="imageloader img_bor fl ml10 mt10 mb5">
                                    <a href="news_inside.php?id=<?php echo $resultArray[$i]['id'];?>">
                                        <img src="uploadimg/<?php echo $resultArray[$i]['image_name'];?>" width="186" height="171" alt="News"/>
                                    </a>
                                </figure>
                                <p class="pt10">
                                    <?php echo $resultArray[$i]['news_data'];?>
                                </p>
                                 <a href="news_inside.php?id=<?php echo $resultArray[$i]['id'];?>" class="button_style width55 mt5">Read More</a>
                            </li>
                             <?php }}?>
                           <!-- <li>
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.<br /> <span>Kalyan, August 02, 2013</span></h3>
                                <figure class="imageloader img_bor fl mr10 mt10 mb5">
                                    <img src="images/news/news_img1.jpg" width="186" height="171" alt="News"/>
                                </figure>
                                <p class="pt10">
                                It is not known as to when the Durgadi fort was constructed. The wall of the fort along the top of the inner bank of the ditch, and, near the north end, had a gateway known as the Delhi or Killyacha Darwaja, which was entered by a path along the top of the north side of the town wall. Inside the fort there was a low belt of ground, about the same level, asd the top of the ditch, with a shallow pond not far from the Delhi gate. The remains of the pond are still visible, in the north-west corner the fort rose in a small flat-topped mound about thrity feet high. On the top of the mound, on the west crest which overhangs and is about 100 feet above the river, is the prayer wall or idgah, sixty-four feet long, thirteen high and seven thick, which is now in a dilapidated condition. This doubtful wall is said to be of the old Durga temple wall and is thickly plastered. It is said that near the east crest of the mound there was a mosque, but no remains of it can be traced. About thirty to forty yards of the idgah was a round cut stone wall...
                                </p>
                                <a href="news_inside.php" class="button_style width55 mt5">Read more</a>
                            
                            </li>-->
                           
                         </ul>                            
                            
                            
                            
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
<script type="text/javascript" src="js/superfish.js"></script>   <!--superfish menu js-->
<script type="text/javascript" src="js/jquery.preloader.js"></script>   <!--imageloader js-->
<script type="text/javascript" src="js/jquery.totemticker.js"></script> <!--vertical ticker js-->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>   <!--fancybox js-->
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