<?php
if (isset($edit)){
echo '<div class="registrants form">';
$addedit='Edit';
}
 else $addedit='Add';
echo '<h1>'.$addedit.' Registration Information</h1>';

echo $this->Form->create('Registrant');
if (isset($edit)){
   echo $this->Form->input('id');
   echo $this->Form->input('edit_key', array('type'=>'hidden'));
}

echo '<h2>Basic Information</h2>';
echo '<div id="basic-info" class="addedit-box">';
echo $this->Form->input('name');
echo $this->Form->input('webpage', array('required' => false));
echo $this->Form->input('affiliation');
echo $this->Form->input('request_a', array('label' => 'Display basic info (name, webpage, affiliation) on public list of registrants.', 'default' => true));
echo '</div>';

echo '<h2>Additional Information</h2>';
echo '<div id="additional-info" class="addedit-box">';
echo $this->Form->input('email', array('after'=>'Never displayed publicly.  Confirmation and other correspondence will be sent to this address.'));
echo $this->Form->input('request_b', array('label' => 'Request funding.  If you request funding, please use the comment section to say whether you are a graduate student, postdoc, etc., and any other relevant information.'));
echo $this->Form->input('comment', array('rows' => '10'));
echo $this->Form->input('captcha', array('label' => 'Please Enter the Sum of ' . $mathCaptcha, 'after'=>'anti-spam'));
echo '</div>';
?>



<?php
echo $this->Form->end('Submit');

if (isset($edit)) {
echo '</div>';
?>
<div class="actions">
     <h3><?php echo __('Actions'); ?></h3>
     <ul>

	<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Registrant.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Registrant.id'))); ?></li>
		  <li><?php echo $this->Html->link(__('Cancel'), array('action' => 'index')); ?></li>
		  </ul>
</div>
<? }
?>



