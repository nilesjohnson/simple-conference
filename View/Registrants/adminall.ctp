<h1><?php echo $view_title; ?></h1>



<?php 
$site_url = Configure::read('site.home');
$site_name = Configure::read('site.name');
?>
<table>
    <tr>
        <th><?php echo $this->Paginator->sort('id', 'ID/Edit'); ?></th>
        <th><?php echo $this->Paginator->sort('request_a', 'Public Info'); ?></th>
        <th><?php echo $this->Paginator->sort('name', 'Name/Webpage'); ?></th>
        <th><?php echo $this->Paginator->sort('email', 'Email'); ?></th>
        <th><?php echo $this->Paginator->sort('affiliation', 'Affiliation'); ?></th>
        <th><?php echo $this->Paginator->sort('request_b', 'Funding'); ?></th>
        <th><?php echo $this->Paginator->sort('comment', 'Comment'); ?></th>
    </tr>
       <?php foreach ($registrants as $registrant): 
       $R = $registrant['Registrant'];
       ?>
    <tr>
        <td><?php echo $this->Html->link($R['id'],
	'/registrants/edit/'.$R['id'].'/'.$R['edit_key'], 
	array('target' => 'edit_blank')); ?> </td>
        <td><?php echo  $R['request_a'] ? 'true':'false' ?></td>
        <td><?php echo $R['webpage'] ? 
	$this->Html->link($R['name'], $R['webpage'],
	array('target' => 'webpage_blank')) :
	$R['name']; ?> </td>
        <td><?php echo  $R['email']?></td>
        <td><?php echo  $R['affiliation']?></td>
        <td><?php echo  $R['request_b'] ? 'true':'false' ?></td>
        <td><?php echo  $R['comment']?></td>
    </tr>
    <?php endforeach; ?>
</table>

