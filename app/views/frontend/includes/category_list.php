<div class="grid__column-2">
    <nav class="category">
        <h3 class="category__heading">
            <i class="fas fa-list-ul"></i> DANH MỤC
        </h3>
        <ul class="category-list">
            <?php foreach($data['danhmuc'] as $danhmuc):?>
            <li class="category-item">
                <a href="<?php echo URLROOT.'/webshop/danhmuc/'.$danhmuc->link?>" class="category-item-link"><?php echo $danhmuc->ten?></a>
            </li>
            <?php endforeach;?>
        </ul>
    </nav>
</div>