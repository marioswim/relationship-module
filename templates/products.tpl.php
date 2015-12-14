
<div class="offer-products">
<?php 
	foreach ($products as $product) 
	{
		echo '<div class="product">                    ';
        echo '  <a id="link" href="/'.$lan.'/'.drupal_get_path_alias("node/".$product->nid).'">
        			<span>'.$product->title.'</span>
    			</a>
              </div>';
	}
?> 

</div>