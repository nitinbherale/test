<?php 
    include("connect.php");
   // $Pg=$_GET["pg"];
   
 $page=$_GET['id'];
 $mainMenu=$_GET['data'];
   
   $resultArray=array();
  $query="select id,dept_name from tbl_dept where status=0 order by id DESC";
  
  $ResChkFaqExists=mysqli_query($dblink,$query);
	if(count($ResChkFaqExists)>0)
	{
	  	while($RwGtAlSbmsn=mysqli_fetch_array($ResChkFaqExists))
			{
				array_push($resultArray,$RwGtAlSbmsn);
			}	
		//print_r($resultArray);
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
<meta name="keywords" content="Kalyan Dombivli Municipal Corporation, Official Website, KDMC, Kalyan, Dombivli, Municipal Corporation, KDMC Commissioner, KDMC Mayor, KDMC Departments, Accounts Department, Audit Department, Computer Department, Health Department, Public Work Department, Newsmax Multimedia Pvt Ltd."/>

<title>KDMC | Departments</title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/superfish.css"/>  <!--superfish menu css-->

<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
    
</head>

<body class="department_page">
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
                                    <a href="index.php">Home</a> &gt; <a href="#"><?php echo $mainMenu;?></a> &gt; <span class="active_breadcrumb"><?php echo $page;?></span>
                                </div>
                            </div>
                            
                            <div class="page_title">
                                <h2>Departments</h2>
                            </div>
                            
                            <article>
                                <div class="dept_list pt2">
                                    <ul class="">
                                    <?php if(count($resultArray)>0){
                                    for($i=0;$i<count($resultArray);$i++){?>
                                        <li><a href="department_details.php?id=<?php echo $resultArray[$i]['id'];?>"><?php echo $resultArray[$i]['dept_name'];?></a></li>
                                        
                                        <!--
                                        <li><a href="department_details.php?id=<?php echo $resultArray[$i]['id'];?>&&menu=<?php echo $mainMenu;?>&&page=<?php echo $page;?>"><?php echo $resultArray[$i]['dept_name'];?></a></li>
                                        -->
                                        
                                        <?php }}else{?>
                                        <div>Currently no departments available.</div>
                                <?php } ?>
                                       <!-- <li><a href="audit_dept.php">Audit Dept.</a></li>
                                        <li><a href="ass_tax_dept.php">Ass &amp; Tax Coll. Dept</a></li>
                                        <li><a href="#">Computer Dept.</a></li>
                                        <li><a href="#">General Admin. Dept.</a></li>
                                        <li><a href="#">Health Dept.</a></li>
                                        <li><a href="#">Public Work Dept.</a></li>-->
                                    </ul>
                                </div>
                                
                            </article>
                            <div class="cl pl14 pt20">
                                <img src="images/department/nmpl_add.jpg" width="640" height="80" />
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
<script type="text/javascript" src="js/jquery.preloader.js"></script>  <!--imageloader js-->
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
    
    if(jQuery('body').hasClass("department_page"))
    {
        jQuery(".about_menu").addClass("active");
        jQuery(".departments").addClass("active");
    }
   
    jQuery(".sf-menu li:last-child a").css("background","none");
    jQuery(".sf-menu li li:last-child").css("border-bottom","0px none");
});
</script>
</body>
</html>