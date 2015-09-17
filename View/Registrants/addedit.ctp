
<?php
// calendar date picker

$this->Html->script('jquery-ui-1.8.10.custom/js/jquery-1.4.4.min',array('inline'=>false));
$this->Html->script('jquery-ui-1.8.10.custom/js/jquery-ui-1.8.10.custom.min',array('inline'=>false));
$this->Html->css('jquery-ui-1.8.10.custom-css/jquery-ui-1.8.10.custom',array('inline'=>false));
$this->Html->script('datepicker',array('inline'=>false));

?>


<h1>Add Meeting Information</h1>

<?php 
echo $this->Form->create('Registrant');
echo $this->Form->input('name');
//echo $this->Form->input('edit_key', array('type'=>'hidden'));
echo $this->Form->input('webpage');
echo $this->Form->input('affiliation');
echo $this->Form->input('email', array('after'=>'never displayed publicly; confirmation and edit/delete codes will be sent to this address'));
echo $this->Form->input('comment', array('rows' => '10'));
?>



<?php
echo $this->Form->input('captcha', array('label' => 'Please Enter the Sum of ' . $mathCaptcha, 'after'=>'anti-spam'));
echo $this->Form->end('Submit');
?>



