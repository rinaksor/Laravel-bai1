<h1>Thêm chuyên mục</h1>
<form method="POST" action="<?php echo route('categories.add');?>">
    <div>
        <input type="text" name="category_name" placeholder="Ten chuyen muc">
    </div>
    <?php echo csrf_field(); ?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> -->
    <button type="submit">Them chuyen muc</button>
    
</form>