<div class="pt-10">
    <div class="max-w-7xl mx-auto px-8">
        <div class="">
            <a href="<?php echo e(URL::previous()); ?>" title="Back"><i class="far fa-caret-square-left text-4xl text-red-500 hover:text-red-600"></i></a>
        </div>
        <form method="POST" action=".">
            <?php echo csrf_field(); ?>
            <?php echo method_field($method); ?>
            <div class="flex py-4">
                <div class="flex-1 p-4 pl-2">
                    <label for="first_name" class="block">First Name</label>
                    <input value="<?php if($employee): ?> <?php echo e($employee->first_name); ?> <?php endif; ?>" type="text" name="first_name" class="block w-full rounded-lg">
                </div>
                <div class="flex-1 p-4 pl-2">
                    <label for="last_name" class="block">Last Name</label>
                    <input value="<?php if($employee): ?> <?php echo e($employee->last_name); ?> <?php endif; ?>" type="text" name="last_name" class="block w-full rounded-lg">
                </div>
            </div>
            <div class="flex p-2 py-8">
                <div class="flex-1 p-4 pr-2">
                    <label for="email" class="block">Email</label>
                    <input value="<?php if($employee): ?> <?php echo e($employee->email); ?> <?php endif; ?>" type="email" name="email" class="block w-full rounded-lg">
                </div>
                <div class="flex-1 p-10">
                    <label for="phone_number">Contact No.</label>
                    <input value="<?php if($employee): ?> <?php echo e($employee->phone_number); ?> <?php endif; ?>" type="text" name="phone_number">
                </div>
            </div>
            <div class="flex justify-end">
                <?php echo $__env->make('components.add-buttons', [$add_btn = $button], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </form>
    </div>
</div><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/layouts/create-employees.blade.php ENDPATH**/ ?>