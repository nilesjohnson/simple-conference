<h1><?php echo $view_title; ?></h1>



<?php 
$site_url = Configure::read('site.home');
$site_name = Configure::read('site.name');
?>
<table>
    <tr>
        <th width="33%"><?php echo $this->Paginator->sort('name', 'Name/Webpage'); ?></th>
        <th><?php echo $this->Paginator->sort('affiliation', 'Affiliation'); ?></th>
    </tr>
       <?php foreach ($registrants as $registrant): 
       $R = $registrant['Registrant'];
       ?>
    <tr>
        <td><?php echo $R['webpage'] ? 
	$this->Html->link($R['name'], $R['webpage'],
	array('target' => 'webpage_blank')) :
	$R['name']; ?> </td>
        <td><?php echo  $R['affiliation']?></td>
    </tr>
    <?php endforeach; ?>
</table>


