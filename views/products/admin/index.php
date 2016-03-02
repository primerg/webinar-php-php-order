<h1>Products</h1>

<div id="products" class="list-mngt">
 
<input class="search" placeholder="Search" />
<button class="sort" data-sort="name">
Sort by name
</button>

<table class="products table-condensed table-bordered">
	<thead>
	  <tr>
	  	<td class="id">ID</td>
	    <td class="name">Name</td>
	    <td class="stock">Stock</td>
	    <td class="status">Status</td>
	  </tr>
	</thead>
	<tbody class="list">
	  <?php foreach ($products as $product) { ?>
	  <tr>
	  	<td class="id"><?php echo $product->id ?></td>
	    <td class="name"><?php echo $product->name ?></td>
	    <td class="stock"><?php echo $product->stock ?></td>
	    <td class="status"><?php echo $product->status ? 'Available' : 'Not available' ?></td>
	  </tr>
	  <?php } ?>
	</tbody>
</table>

</div>

<script src="http://listjs.com/no-cdn/list.js"></script>

<script type="text/javascript">
	var options = {
	  valueNames: [ 'name', 'stock', 'status' ]
	};

	var userList = new List('products', options);
</script>

