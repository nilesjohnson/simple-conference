<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<title>
  <?php echo Configure::read('site.name');?>
</title>
<?php
echo $this->Html->meta(
    'favicon.ico',
    '/favicon.ico',
    array('type' => 'icon')) ."\n";

echo $this->Html->css('simple-conference') ."\n";


echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

echo Configure::read('site.analytics');
?>

</head>
<body>
<div id="container">
  <div id="flashdiv">
    <?php echo $this->Session->flash(); ?>
  </div>

  <div id="header">
    <h1><?php echo $this->Html->link(Configure::read('site.name'),Configure::read('site.home'));?></h1>
  <div id="sub_header">
    <div id="menu">
      <?php echo $this->Html->link('Home',array('controller' =>
      'registrants', 'action' => 'index'))?>
      |
      <?php echo $this->Html->link('Local Information',array('controller' =>
      'registrants', 'action' => 'local'))?>
      |
      <?php echo $this->Html->link('Current Registrants',array('controller' =>
     'registrants', 'action' => 'all'))?>
      | 
      <?php echo $this->Html->link('Organizers',array('controller' =>
     'registrants', 'action' => 'organizers'))?>
      &nbsp;&nbsp;
<!--
      <?php if (empty($noRegButton)) {echo $this->Html->link('Register&nbsp;Now!', array('action' => 'add'), array('class' => 'button', 'id' => 'add-button', 'escape' => false));}?>
-->
    </div>
  </div>
  </div>

  <!-- view content -->
  <div id="content">
    <?php echo $this->fetch('content'); ?>
  </div>
    <div style="text-align:left; padding:1em 1em"><p>This meeting is funded with support from the <a href="http://math.osu.edu/mri" target="mri">Mathematics Research Institute</a> and the <a href="http://nsf.gov" target="nsf">National Science Foundation</a>.</p>
    </div>

  <!-- footer -->
  <div id="footer">
    <!-- footer content -->
    <div style="text-align: center;">
      <?php echo $this->Html->link(str_replace('http://','',Configure::read('site.host')),Configure::read('site.host'), array('target' => 'hosthome'));?>
      |
      <?php echo $this->Html->link('simple-conference web app','http://github.com/nilesjohnson/simple-conference',array('target' => 'github')); ?>
    </div>
</div>



<?php echo $this->element('sql_dump'); ?>
</body>
</html>
