<div class="flex justify-end flex-grow">
    <div id="search-container" class="min-w-half relative">
        <form method="GET" action="#" class="flex min-w-full absolute bottom-0">
            <?php echo csrf_field(); ?>
            <label for="search" class="text-base font-medium mr-4"><span class="relative top-2">Search</span></label>
            <input value="<?php echo e(request('search')); ?>" id="search" name="search" type="text" class="rounded-lg w-full">
        </form>
    </div>
</div><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Reflections\Admin-System-reflection\resources\views/components/search-bar.blade.php ENDPATH**/ ?>