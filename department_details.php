
<?php 
    include("connect.php");
    
    $post_id=$_GET['id'];
$tblname="tbl_dept";
$getdtlsby="id";
$squery="select id from tbl_dept where id=$post_id and status=0";
$result=mysqli_query($dblink,$squery);
if(mysqli_num_rows($result)>0)
{
    $getPageDtls=getPostDtls($post_id,$tblname,$getdtlsby);
}



//$main_menu=$_GET['menu'];
//$page=$_GET['page'];
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
<meta name="keywords" content="Kalyan Dombivli Municipal Corporation, Official Website, KDMC, Kalyan, Dombivli, Municipal Corporation, KDMC Commissioner, KDMC Mayor, KDMC Departments, Ass & Tax Coll. Department, Department Hierarchy, Functions, Budget, Audit Department, Newsmax Multimedia Pvt Ltd."/>

<title>KDMC | Ass &amp; Tax Coll. Department</title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/superfish.css"/>

<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.preloader.js"></script>

<script type="text/javascript" src="js/jquery.totemticker.js"></script>

<!--radio button-->
<link rel="stylesheet" type="text/css" href="css/radio_button.css"/>
<script type="text/javascript" src="js/form-elements.js"></script>
<!--radio button-->

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
        jQuery(".departments").addClass("active");
    }
   
    jQuery(".sf-menu li:last-child a").css("background","none");
    jQuery(".sf-menu li li:last-child").css("border-bottom","0px none");
});

</script>

<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
    

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
                                    <a href="index.php">Home</a> &gt; <a href="#"><?php //echo $main_menu?>Departments</a> &gt; <span class="active_breadcrumb"><?php echo $getPageDtls[0]['dept_name'];?></span>
                                    <!--
                                    <a href="index.php">Home</a> &gt; <a href="#"><?php //echo $main_menu?>Departments</a> &gt; <a href="departments.php"><?php //echo $page?></a> &gt; <span class="active_breadcrumb"><?php echo $getPageDtls[0]['dept_name'];?></span>
                                    -->
                                    
                                    
                                </div>
                            </div>
                            
                            <div class="page_title">
                                <h2><?php echo $getPageDtls[0]['dept_name'];?></h2>
                            </div>
                            
                            <article>
                               <?php echo $getPageDtls[0]['description'];?>
                               
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


</body>
</html>