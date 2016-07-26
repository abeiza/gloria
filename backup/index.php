<?php
include('common/headerfooter.php');

$_SESSION['cur_pg'] = 'index.php';

$q_banner =
    'SELECT * '.
    'FROM '.TBL_GENERAL_SETTING.' '.
    'WHERE id='.SET_HOME_BANNER;
//echo $query;
$rslt_banner=mysql_query($q_banner);
if ($rslt_banner)
{
  if (mysql_num_rows($rslt_banner) > 0)
  {
    $lang_col = 1;
    $dt_banner = mysql_fetch_array($rslt_banner);
    $banner_file = FOLDER_IMAGE_BANNER.'/'.$dt_banner['setting_value'];
    //echo $banner_file;
  }
}

show_header('mr', $banner_file, 0 ,0);

?>
<?php
show_footer();
?>
