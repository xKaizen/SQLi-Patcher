<?
//put this at /public_html(same folder with index.php)
if (ereg("%20union%20", $_
GET['id'])||ereg("union",$_
GET['id']) || ereg("\*union\*",$_
GET['id']) || ereg("\+union\+",
$_GET[id]) || ereg("\*",$_
GET['id']))
{
ob_start();
header("location: index.php"); //redirect to index
ob_flush();
}
?>
