<h1>Dashboard</h1>

<div class="row">
	<div class=" col-sm-3">
		<div class="report">
			<div class="number"><?php echo count($products) ?></div>
			<div class="desc"><a href="<?php echo url('/admin/products') ?>">Products</a></div>
		</div>
	</div>

	<div class=" col-sm-3">
		<div class="report">
			<div class="number"><?php echo count($users) ?></div>
			<div class="desc"><a href="<?php echo url('/admin/users') ?>">Users</a></div>
		</div>
	</div>
</div>

<style type="text/css">
	.report {
		background: #00aedb;
		text-align: center;
		padding: 20px;
		color: #fff;
	}

	.report .number {
		font-size: 200%;
	}
</style>