<!-- social networking buttons -->
<!-- disabled
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
-->

<?php

/*
echo $this->Js->link(array(
'https://apis.google.com/js/plusone.js', 
'http://platform.twitter.com/widgets.js', 
), false);
*/

/*
function gcal_link($start,$end,$title,$location) {
  $start_string = str_replace('-','',$start);
  $end_string = date('Ymd',strtotime($end." +1 day"));
  $url = "http://www.google.com/calendar/event?action=TEMPLATE&".
    "text=".$title."&".
    "dates=".$start_string."/".$end_string.
    "&details=".
    "&location=".$location.
    "&trp=false&sprop=http%3A%2F%2Fwww.nilesjohnson.net%2Falgtop-conf&sprop=name:AlgTop-Conf";
  return $url;
}
*/
?>


<div class="intro_text">
</div>


<!-- disabled
<div id="sharingButtons">
  <div class="sharingButton">
    <g:plusone size="medium"></g:plusone>
  </div>
  <div class="sharingButton">
    <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.nilesjohnson.net%2Falgtop-conf%2F&amp;send=false&amp;layout=button_count&amp;width=92&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=2em" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:92px;height:2em" allowTransparency="true"></iframe>
  </div>
  <div class="sharingButton">
    <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>
  </div>
  <div style="clear:both"></div>
</div>
-->

<hr/>
<h1><?php echo $view_title; ?></h1>



<?php 
$site_url = Configure::read('site.home');
$site_name = Configure::read('site.name');
foreach ($registrants as $registrant):

echo '<h3 class="title">'.
   '<a href="'.
   $registrant['Registrant']['webpage'].
   '" target="reg_blank">'.
   $registrant['Registrant']['name'].
   '</a>'
   ;
echo '</h3>';
echo '<div class="registrant">'.
   '</div>';


endforeach; 


?>








<?php
//just added some basic Paginator sorts to give you an idea
echo '<div>';
//notice clicking this will change from ASC to DESC it also changes the class name so you can draw a little arrow. Check out the default CakePHP CSS you'll see it
echo $this->Paginator->sort('name').'<br/>';
echo $this->Paginator->sort('date').'<br/>';
echo $this->Paginator->sort('affiliation').'<br/>';
     echo $this->Paginator->counter(array(
     'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
     )).'<br />';
     	     echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')).' ';
	     	  echo $this->Paginator->numbers(array('separator' => ' | '));
		       echo ' '.$this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
echo '</div>';
?>











