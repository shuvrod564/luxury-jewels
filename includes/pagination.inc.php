 

<!-- <?php if($pageName === 'flat-roof-tile.php') { ?>
    <nav aria-label="Blog Page Navigation">
        <ul class="pagination mt-4 mt-md-5 justify-content-end justify-content-lg-start">
            <?php if( $prevBtn === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $prevPageUrl; ?>" aria-label="Previous">
                        <img src="blog/images/icon/arrow-left.svg" class="img-fluid" alt="Icon">
                    </a>
                </li>
            <?php } ?> 
            <li class="page-item">
                <a class="page-link <?php if($active==='1'){echo "active"; }else{ echo ''; }?>" href="flat-roof-tile.php">1</a>
            </li>
            <li class="page-item">
                <a class="page-link <?php if($active==='2'){echo "active"; }else{ echo ''; }?>" href="flat-roof-tile-2.php">2</a> 
            </li>   
            <?php if( $nextBtn === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $nextPageUrl; ?>" aria-label="Next">
                        <img src="blog/images/icon/arrow-right.svg" class="img-fluid" alt="Icon">
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
<?php } ?> -->


<?php if(isset($pagination) && $pagination === 'blog') { ?>
    <nav aria-label="Blog Page Navigation">
        <ul class="pagination justify-content-center mt-5 pt-5">
            <?php if( $firstArrow === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $prevPageUrl; ?>" aria-label="Previous">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
                    </a>
                </li>
            <?php } ?>
            <!--  -->
            <?php if( $active === '1' ) { ?> 
                <li class="page-item"><a class="page-link active" href="index.php">1</a></li>
            <?php } else { ?> 
                    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
            <?php } ?> 
            <!--  -->
            <?php if( $active === '2' ) { ?> 
                <li class="page-item"><a class="page-link active" href="blog-2.php">2</a></li>
            <?php } else { ?> 
                    <li class="page-item"><a class="page-link" href="blog-2.php">2</a></li>
            <?php } ?> 
            <!--  -->
            <!--<?php if( $active === '3' ) { ?> -->
            <!--    <li class="page-item"><a class="page-link active" href="blog-3.php">3</a></li>-->
            <!--<?php } else { ?> -->
            <!--        <li class="page-item"><a class="page-link" href="blog-3.php">3</a></li>-->
            <!--<?php } ?> -->
 
            <?php if( $lastArrow === 'true' ) { ?> 
                <li class="page-item">
                    <a class="page-link" href="<?php echo $nextPageUrl; ?>" aria-label="Next">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
<?php } else { ?>
<div class="bg-light py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 flex-nowrap">
                <li class="breadcrumb-item"><a href="<?php echo $base_url;?>">Home</a></li>
                <?php if(isset($back) && $back === '2') { ?>
                <li class="breadcrumb-item"><a href="<?php echo $base_url;?>blogs/blog-2.php">Blogs</a></li>
                <?php } else if(isset($back) && $back === '0') { ?>
                    <li class="breadcrumb-item"><a href="javascript:void(history.back(-1))">Blogs</a></li>
                <?php } else { ?>
                    <li class="breadcrumb-item"><a href="<?php echo $base_url;?>blogs/">Blogs</a></li>
                <?php } ?>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page_name; ?></li>
            </ol>
        </nav>
    </div>
</div>
<?php } ?>