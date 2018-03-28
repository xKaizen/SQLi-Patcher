<?
//put this at /public_html(same folder with index.php)
if ( preg_match("%20union%20", $_
GET['id'])|| preg_match("union",$_
GET['id']) || preg_match("\*union\*",$_
GET['id']) || preg_match("\+union\+",
$_GET[id]) || preg_match("\*",$_
GET['id']))
{
ob_start();
header("location: index.php"); //redirect to index
ob_flush();
}
?>
