<?php 
    
include("connect.php"); 
 $post_id=$_GET['id'];
$tblname="tbl_cms_main";
$getdtlsby="subsectionid";
$pquery="select * from $tblname where subsectionid=$post_id and status=0 and archive=0";

$rw_arr=array();

$result=mysqli_query($dblink,$pquery);


 // $page_name=$rw_arr[0]['link'];
if(mysqli_num_rows($result)>0)
{
    $getPageDtls=getPostDtls($post_id,$tblname,$getdtlsby);
   // print_r($getPageDtls);
}
else
{
    
redirect($page_name);
}


	if(mysqli_num_rows($result)>0)
	{
	
		while($row=mysqli_fetch_array($result,MYSQL_ASSOC))
		{
			array_push($rw_arr,$row);
		}
        
       // print_r($rw_arr);
	}

$main_menu=$_GET['mainmenu'];
$sub_menu=$_GET['submenu'];

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
<meta name="description" content="<?php echo $getPageDtls[0]['metatags']; ?>"/>
<meta name="keywords" content="<?php echo $getPageDtls[0]['keywords']; ?>"/>

<title>KDMC | About KDMC | Transport Committee</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/superfish.css"/>  <!--superfish menu css-->

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
                                    <a href="index.php">Home</a> &gt; <a href="#"><?php echo $main_menu;?></a>&gt; <a href="#"><?php echo $sub_menu;?></a> &gt; <span class="active_breadcrumb"><?php echo $getPageDtls[0]['pagetitle']; ?></span>
                                </div>
                            </div>
                            
                            <div class="page_title">
                                <h2><?php echo $getPageDtls[0]['pagetitle']; ?></h2>
                            </div>
                            
                            <article>
                            
                                     <?php echo $rw_arr[0]['content'];?>
                                <!--<div class="cl mt10 section_heading">
                                    <h2>Constitution</h2>
                                    <p class="pt10">
                                    The Transport Committe is appointed by the corporation under section 25 of the Act.
                                    </p>
                                    <p class="pt10">
                                        The Transport Committee consists of 13 members out of which 12 members are appointed by the Corporation. Chairman of Standing Committee is the ex-officio member of Transport Committee. One-half of the members of the Transport Committee retire every second year. The Transport Committee appoints one of its own members to be the Chairman.
                                    </p>
                                </div>
                                
                                <div class="cl mt10 section_heading">
                                    <h2>Duties &amp; Functions</h2>
                                    <p class="pt10">
                                    Transport Committee meets at least once in forthnight. Except the first meeting the day, time and place of the meeting is fixed by the Chairman. The meetings of Tranport Committee are presided over by the Chairman. In the absence of the Chairman,. Committee members select one of its members to preside over the meeting. The notice of the meeting specifying the time and the place at which such meeting is held and the business to be transacted in the meeting is given by the Municipal Secretary and sent to the Transport Committee Members by ordinary post. The proposal before the Transport Committee is decided by a majority of vote of the members present. When there is an equality of votes the presiding authority has a right of a second or casting vote.

                                    </p>
                                
                                
                                    <p class="pt10">
                                    The minute of the names of members present and the proceedings of every meeting are drawn up and kept by the Municipal 
Secretary.
                                    </p>
                                
                                    <p class="pt10">
                                    The Transport Manager has a right to remain present in the meeting of the Transport Committee and to take part in the discussion but he has no right to vote upon or to make any proposition in the meeting.

                                    </p>
                                </div>
                                
                                <div class="cl mt10 section_heading">
                                    <h2>Existing Setup</h2>
                                    <p class="pt10">
                                    At present there are 13 members in this Committee. The political partywise breakup is given in the following table- 
                                    </p>
                                
                                    <table cellpadding="0" cellspacing="2" width="620" class="table_style mt10">
                                        <tbody>
                                            <tr valign="top">
                                                <th align="center">Sr. No.</th>
                                                <th>Name Of the Political Party</th>
                                                <th align="center">No. of Elected Councillors</th>
                                                <th align="center">No. of Nominated Councillors</th>
                                                <th align="center">Total No. of Councillors</th>
                                            </tr>
                                            
                                            <tr valign="top">
                                                <td width="44" align="center">1</td>
                                                <td width="217">Shivsena</td>
                                                <td width="114" align="center">6</td>
                                                <td width="114" align="center">0</td>
                                                <td width="114" align="center">6</td>
                                            </tr>
                                            
                                            <tr valign="top">
                                                <td width="44" align="center">2</td>
                                                <td width="217">Bhartiya Janata Party</td>
                                                <td width="114" align="center">2</td>
                                                <td width="114" align="center">0</td>
                                                <td width="114" align="center">2</td>
                                            </tr>
                                            
                                            <tr valign="top">
                                                <td width="44" align="center">3</td>
                                                <td width="217">Indian National Congress</td>
                                                <td width="114" align="center">2</td>
                                                <td width="114" align="center">0</td>
                                                <td width="114" align="center">2</td>
                                            </tr>
                                            
                                            <tr valign="top">
                                                <td width="44" align="center">4</td>
                                                <td width="217">Nationalist Congress Party</td>
                                                <td width="114" align="center">1</td>
                                                <td width="114" align="center">0</td>
                                                <td width="114" align="center">1</td>
                                            </tr>
                                            
                                            <tr valign="top">
                                                <td width="44" align="center">5</td>
                                                <td width="217">Maharashtra Navnirman Sena</td>
                                                <td width="114" align="center">2</td>
                                                <td width="114" align="center">0</td>
                                                <td width="114" align="center">2</td>
                                            </tr>
                                            
                                            <tr valign="top" class="bold">
                                                <td width="44" align="center">&nbsp;</td>
                                                <td width="217">Total</td>
                                                <td width="114" align="center">13</td>
                                                <td width="114" align="center">0</td>
                                                <td width="114" align="center">13</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <p class="pt10 fnt14 bold c000"><span class="c990c00">Mr. Rajesh Shantaram Kadam</span> of  <span class="c990c00">Maharashtra Navnirman Sena</span> is appointed as the <span class="c990c00">Chairman</span>.</p>
                                </div>
                                
                                -->
                            </article>
                            
                            
                        
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

 <?php echo "hello ".$page_nm = str_replace(' ','_',strtolower($getPageDtls[0]['pagetitle']));?>   
   <?php echo "hello ".$menu_nm = str_replace(' ','_',strtolower($sub_menu));?>   

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
    
    if(jQuery('body').hasClass("corporation_page"))
    {
        //jQuery(".about_kdmc").addClass("active");
        
       //jQuery(".commissioner").addClass("auth_active");
        jQuery('.<?php echo $menu_nm;?>').addClass("auth_active");
        jQuery('.<?php echo $page_nm;?>').addClass("auth_active");
    }
   
    
   
    jQuery(".sf-menu li:last-child a").css("background","none");
    jQuery(".sf-menu li li:last-child").css("border-bottom","0px none");
});
</script>
</body>
</html>