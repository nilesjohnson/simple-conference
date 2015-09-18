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
<p>This is the top page.  It just has links to the other pages.</p>
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


<p><?php echo $this->Html->link('Register', array('action' => 'add'), array('class' => 'button', 'id' => 'add-button'));?></p>
