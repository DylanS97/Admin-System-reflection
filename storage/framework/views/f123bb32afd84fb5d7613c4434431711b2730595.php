<div class="">
    <div class="max-w-7xl mx-auto px-10 pt-10">
        <div class="flex justify-between">
            <div class="">
                <a href="<?php echo e($back); ?>" title="Back"><i class="far fa-caret-square-left text-4xl text-red-500 hover:text-red-600"></i></a>
            </div>
            <div class="flex justify-end relative">
                <?php echo e($content); ?>

                <a class="mx-3" href="<?php echo e($edit_link); ?>" title="Edit <?php echo e($val); ?>"><i class="far fa-edit text-green-500 hover:text-green-600 text-4xl"></i></a>
                <button id="delete-button" class="ml-3" type="submit" title="Delete <?php echo e($val); ?>"><i class="far fa-trash-alt text-red-500 hover:text-red-600 text-4xl"></i></button>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Reflections\Admin-System-reflection\resources\views/components/edit-delete-back-buttons.blade.php ENDPATH**/ ?>