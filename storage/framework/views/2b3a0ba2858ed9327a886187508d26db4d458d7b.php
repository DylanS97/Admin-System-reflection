<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Hello')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="w-full pt-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            <div class="block p-4 rounded-t-md">
                <a href="<?php echo e(URL::current()); ?>"><span>Details</span></a>
            </div>
            <div class="p-4">
                <a href="<?php echo e(URL::current()); ?>/employees"><span>Employees</span></a>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/companies/company.blade.php ENDPATH**/ ?>