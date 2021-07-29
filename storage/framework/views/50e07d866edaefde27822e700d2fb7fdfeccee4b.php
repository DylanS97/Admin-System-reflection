<div class="pt-10">
    <div class="max-w-7xl mx-auto px-8">
        <div class="">
            <a href="<?php echo e(URL::previous()); ?>" title="Back"><i class="far fa-caret-square-left text-4xl text-red-500 hover:text-red-600"></i></a>
        </div>
        <form method="POST" action="." enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if(strpos(URL::current(), '/edit')): ?>
                <?php echo method_field('PATCH'); ?>
            <?php endif; ?>
            <div class="flex px-2 pt-8">
                <div class="flex-1 px-2">
                    <div class="py-3">
                        <label for="name" class="block">Name</label>
                        <input value="<?php if($company): ?> <?php echo e($company->name); ?> <?php endif; ?>" type="text" name="name" class="block w-full rounded-lg">
                    </div>
                    <div class="py-3">
                        <label for="email" class="block">Email</label>
                        <input value="<?php if($company): ?> <?php echo e($company->email); ?> <?php endif; ?>" type="email" name="email" class="block w-full rounded-lg">
                    </div>
                    <div class="py-3">
                        <label for="website" class="mr-8">Website</label>
                        <input value="<?php if($company): ?> <?php echo e($company->website); ?> <?php endif; ?>" type="url" name="website" class="rounded-lg w-full">
                    </div>
                    <div class="flex py-8">
                        <div class="flex-1">
                            <label for="logo" class="mr-10">Logo</label>
                            <input type="file" accept="image/*" name="logo" id="logo" class="justify-end">
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="">
                        <img class="m-auto h-full max-w-md" src="<?php if($company): ?> /storage/images/<?php echo e($company->logo); ?> <?php endif; ?>" alt="<?php if($company): ?> <?php echo e($company->name); ?> <?php endif; ?>">
                    </div>
                </div>
            </div>
            <?php echo $__env->make('components.add-buttons', [$add_btn = $button], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
    </div>
</div><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/layouts/create-company.blade.php ENDPATH**/ ?>