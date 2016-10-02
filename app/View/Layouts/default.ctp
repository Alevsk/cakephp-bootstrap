<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<html lang="en">
	<?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('jumbotron');
		echo $this->Html->css('ie10-viewport-bug-workaround');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<nav id="header" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
	</nav>
	<div id="content" class="container" role="main">

		<?php echo $this->Flash->render(); ?>

		<?php echo $this->fetch('content'); ?>
	</div>
	<div id="footer" class="container">
		<?php echo $this->Html->link(
				$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
				'http://www.cakephp.org/',
				array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
			);
		?>
		<p>
			<?php echo $cakeVersion; ?>
		</p>
	</div>
	<?php echo $this->Html->script('jquery.min'); ?>
	<?php echo $this->Html->script('tether.min'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->Html->script('ie-emulation-modes-warning'); ?>
	<?php echo $this->Html->script('ie10-viewport-bug-workaround'); ?>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
