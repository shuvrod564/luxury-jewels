<div class="product__card position-relative">
    <div class="position-relative overflow-hidden">
        <a href="product-detail.php" class="thumbnail overflow-hidden">
            <img 
                src="<?php echo $thumbnail; ?>" 
                alt="<?php echo $title; ?>" 
                width="292" height="385"
                class="img-fluid w-100"
            >
        </a>
        <div class="action__btns d-flex justify-content-center gap-3 position-absolute start-0 w-100">
            <a href="#" class="wish__btn fs-5 rounded-circle d-flex justify-content-center align-items-center">
                <i class="fa fa-heart-o"></i>
            </a>
            <a href="#" class="wish__btn fs-5 rounded-circle d-flex justify-content-center align-items-center">
                <i class="fa fa-cart-plus"></i>
            </a>
        </div>
    </div>
    <div class="caption pt-3">
        <h3 class="fs-5 fw-normal text-uppercase title">
            <a href="product-detail.php"><?php echo $title; ?></a>
        </h3>
        <p class="small mb-1 lh-sm">
            <?php echo $desc; ?>
        </p>
        <div class="fs-5 fw-bold text-dark"><?php if(isset($price) && $price != ''){ echo $price; } else{ echo 'KD 250.89'; } ?> </div>  
    </div>
    <!--.//caption-->
     
</div>
<!--.//service__card-->