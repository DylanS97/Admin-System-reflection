
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__( $employee->first_name . ' ' . $employee->last_name)); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="w-full pt-8">
        <div class="max-w-7xl px-10 mx-auto">
            <div class="shadow p-8 rounded-2xl flex bg-gray-50">
                <div class="flex-1">
                    <div class="text-center pb-8"><h1 class="text-4xl font-bold"><?php echo e($employee['first_name']); ?> <?php echo e($employee['last_name']); ?></h1></div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Employed Since:</strong></span>
                            <span><?php echo e($employee->created_at->format('d F Y')); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Employer:</strong></span>
                            <span><?php echo e($employee->company->name); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Email:</strong></span>
                            <span><?php echo e($employee->email); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Contact No.:</strong></span>
                            <span><?php echo e($employee->phone_number); ?></span>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="/storage/images/<?php echo e($employee->company->logo); ?>" alt="<?php echo e($employee->company->name); ?>" class="mx-auto h-full">
                </div>
            </div>
        </div>
    </div>
    
    <div class="">
        <div class="max-w-7xl mx-auto px-10 pt-10">
            <div class="flex justify-end">
                <a class="mr-6" href="/employees/<?php echo e($employee->id); ?>/edit" title="Edit Employee"><i class="far fa-edit text-green-500 text-4xl"></i></a>
                <form method="POST" action="<?php echo e($employee['id']); ?>/delete">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="" type="submit" title="Delete Employee"><i class="far fa-trash-alt text-red-500 text-4xl"></i></button>
                </form>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/employees/employee.blade.php ENDPATH**/ ?>