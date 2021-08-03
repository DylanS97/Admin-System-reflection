<div class="pt-10">
    <div class="max-w-7xl mx-auto px-8">
        <div class="px-4">
            <a href="<?php echo e(URL::previous()); ?>" title="Back"><i class="far fa-caret-square-left text-4xl text-red-500 hover:text-red-600"></i></a>
        </div>
        <form method="POST" action="<?php echo e($slug); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field($method); ?>
            <input value="<?php echo e($company->id); ?>" name="company" type="hidden">
            <div class="flex">
                <div class="flex-1 py-4">
                    <div class="p-4">
                        <label for="first_name" class="block">First Name</label>
                        <input value="<?php if(old('first_name')): ?> <?php echo e(old('first_name')); ?> <?php elseif($employee): ?> <?php echo e($employee->first_name); ?> <?php endif; ?>" type="text" name="first_name" class="block w-full rounded-lg">
                        <?php $__errorArgs = ['first_name'];
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
                    <div class="p-4">
                        <label for="last_name" class="block">Last Name</label>
                        <input value="<?php if(old('last_name')): ?> <?php echo e(old('last_name')); ?> <?php elseif($employee): ?> <?php echo e($employee->last_name); ?> <?php endif; ?>" type="text" name="last_name" class="block w-full rounded-lg">
                        <?php $__errorArgs = ['last_name'];
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
                <div class="flex-1 py-4">
                    <div class="p-4">
                        <label for="email" class="block">Email</label>
                        <input value="<?php if(old('email')): ?> <?php echo e(old('email')); ?> <?php elseif($employee): ?> <?php echo e($employee->email); ?> <?php endif; ?>" type="email" name="email" class="block w-full rounded-lg">
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
                    <div class="p-4">
                        <label for="phone_number">Contact No.</label>
                        <input value="<?php if(old('phone_number')): ?> <?php echo e(old('phone_number')); ?> <?php elseif($employee): ?> <?php echo e($employee->phone_number); ?> <?php endif; ?>" type="text" name="phone_number" class="block w-full rounded-lg">
                        <?php $__errorArgs = ['phone_number'];
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
            <div class="flex justify-end p-4 pt-8">
                <?php echo $__env->make('components.add-buttons', [$add_btn = $button], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </form>
    </div>
</div><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Admin-System-reflection\resources\views/layouts/create-edit-employees.blade.php ENDPATH**/ ?>