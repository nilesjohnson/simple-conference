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

// social buttons
echo $this->Html->script('social');

// jquery core
//echo $this->Html->script('//code.jquery.com/jquery-1.10.2.min.js') ."\n";

// datepicker
//echo $this->Html->css('//code.jquery.com/ui/1.11.1/themes/redmond/jquery-ui.css')."\n";
//echo $this->Html->script('//code.jquery.com/ui/1.11.1/jquery-ui.js') ."\n";
//echo $this->Html->script('datepicker') ."\n";  //configuration for conflist app


// select2
//echo $this->Html->css('http://cdn.jsdelivr.net/select2/3.4.8/select2.css') ."\n";
//echo $this->Html->script('http://cdn.jsdelivr.net/select2/3.4.8/select2.min.js') ."\n"; 
//echo $this->Html->script('select2_fields') ."\n";  //configuration for conflist app

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');

echo Configure::read('site.analytics');
?>

</head>
<body>
<div id="container">
  <div id="header">
    <h1><?php echo $this->Html->link(Configure::read('site.name'),Configure::read('site.home'));?></h1>
  </div>
  <div id="sub_header">
    <div id="menu">
      <?php echo $this->Html->link('Home',array('controller' =>
      'registrants', 'action' => 'index'))?>
      |
      <?php echo $this->Html->link('Current Registrants',array('controller' =>
     'registrants', 'action' => 'all'))?>
      | 
      <?php echo $this->Html->link('New Registration',array('controller' =>
     'registrants', 'action' => 'add'))?>

      <div id="admin_contact">
	Trouble? Comments? 
	<?php echo $this->Html->link('Contact ' . Configure::read('site.host_name'),Configure::read('site.host_contact_url'));?>
      </div>
    </div>
  </div>

  <div id="flashdiv">
    <?php echo $this->Session->flash(); ?>
  </div>

  <!-- view content -->
  <div id="content">
    <?php echo $this->fetch('content'); ?>
  </div>
  <!-- footer -->
  <div id="footer">
    <!-- footer content -->
    <div style="text-align: center">
      <?php echo $this->Html->link(str_replace('http://www.','',Configure::read('site.host')),Configure::read('site.host'));?>
    </div>
  </div>
</div>



<?php echo $this->element('sql_dump'); ?>
</body>
</html>
