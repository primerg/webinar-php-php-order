<div class="product-view">
    <div class="product-essential">
        <div class="row">
        	<div class="col-sm-4">
        		<div class="zoom-left">
					<img id="img_01" class="main-image" src="<?php echo $product->image ? url('/' . $product->image) : url('/public/img/products/1.jpg') ?>" data-zoom-image="<?php echo $product->image ? url('/' . $product->image) : url('/public/img/products/1.jpg') ?>" height="411" style="height: 411px !important;" />
					
				</div>

            </div>
            <div class="product-shop col-sm-6 col-sms-12">
                <div class="product-name">
                    <h1><?php echo strip_tags($product->name) ?></h1>
                </div> 
                <div class="price-box">
                    <span id="product-price-29" class="regular-price pull-left">
                        <span class="price"><?php echo strip_tags($product->sale_price) ?></span>
                    </span>
                    <p class="availability in-stock pull-right">Availability: <span>In Stock</span></p>

                    <div id="starType"></div>

                </div>

                <div class="simpleCart_shelfItem">
                    <input type="hidden" value="1" class="item_Quantity">
                    <span class="item_name hide"><?php echo strip_tags($product->name) ?></span>
                    <span class="item_price hide"><?php echo strip_tags($product->sale_price) ?></span>
                    <button class="btn-cart button item_add" type="submit" ><span>Add to Cart</span></button>   
                </div>

					<br/>

                <div class="short-description">
		                <div class="std"><?php echo strip_tags($product->summary) ?></div>
		        </div>
            </div>

        </div>

		<div class="row full-description">
			<h2>Description</h2>
			<p><?php echo strip_tags($product->description) ?></p>
		</div> 
    </div>
</div>

<script type="text/javascript">
    simpleCart.bind( 'afterAdd' , function(){
      alert("Product added! The cart total is now at PHP" + simpleCart.grandTotal());
    });
</script>