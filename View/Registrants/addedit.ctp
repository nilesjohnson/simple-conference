<h1>Registration Form</h1>

<?php 
echo $this->Form->create('Registrant');

echo '<h2>Basic Information</h2>';
echo '<div id="basic-info" style="border:1px solid #333; background-color:#efe">';
echo $this->Form->input('name');
//echo $this->Form->input('edit_key', array('type'=>'hidden'));
echo $this->Form->input('webpage', array('required' => false));
echo $this->Form->input('affiliation');
echo $this->Form->input('request_a', array('label' => 'Display basic info (name, webpage, affiliation) on public list of registrants.', 'default' => true));
echo '</div>';

echo '<h2>Additional Information</h2>';
echo '<div id="basic-info" style="border:1px solid #333; background-color:#eef">';
echo $this->Form->input('email', array('after'=>'Never displayed publicly.  Confirmation and other correspondence will be sent to this address.'));
echo $this->Form->input('request_b', array('label' => 'Request funding.  If you request funding, please use the comment section to say whether you are a graduate student, postdoc, etc., and any other relevant information.'));
echo $this->Form->input('comment', array('rows' => '10'));
echo '</div>';
?>



<?php
echo $this->Form->input('captcha', array('label' => 'Please Enter the Sum of ' . $mathCaptcha, 'after'=>'anti-spam'));
echo $this->Form->end('Submit');
?>



