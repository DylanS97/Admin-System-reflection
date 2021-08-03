<div class="pt-10">
    <div class="max-w-7xl mx-auto px-8">
        <div class="">
            <a href="." title="Back"><i class="far fa-caret-square-left text-4xl text-red-500 hover:text-red-600"></i></a>
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
                        <input value="<?php if(old('name')): ?> <?php echo e(old('name')); ?> <?php elseif($company): ?> <?php echo e($company->name); ?> <?php endif; ?>" type="text" name="name" class="block w-full rounded-lg">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="block text-red-500"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="py-3">
                        <label for="email" class="block">Email</label>
                        <input value="<?php if(old('email')): ?> <?php echo e(old('email')); ?> <?php elseif($company): ?> <?php echo e($company->email); ?> <?php endif; ?>" type="email" name="email" class="block w-full rounded-lg">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="block text-red-500"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="py-3">
                        <label for="website" class="mr-8">Website</label>
                        <input value="<?php if(old('website')): ?> <?php echo e(old('website')); ?> <?php elseif($company): ?> <?php echo e($company->website); ?> <?php endif; ?>" type="url" name="website" class="rounded-lg w-full">
                        <?php $__errorArgs = ['website'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="block text-red-500"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="py-8">
                        <div class="flex-1">
                            <label for="logo" class="inline-block w-20 border-r-2 border-gray-300">Logo</label>
                            <input type="file" accept="image/*" name="logo" id="logo" class="ml-10">
                            <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="block text-red-500"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="">
                        <img id="preview-image" class="pl-8 pt-2 m-auto h-full" src="<?php if($company): ?> /storage/<?php echo e($company->logo); ?> <?php endif; ?>" alt="<?php if($company): ?> <?php echo e($company->name); ?> <?php endif; ?>">
                    </div>
                </div>
            </div>
            <?php echo $__env->make('components.add-buttons', [$add_btn = $button], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
    </div>
</div><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Admin-System-reflection\resources\views/layouts/create-edit-company.blade.php ENDPATH**/ ?>