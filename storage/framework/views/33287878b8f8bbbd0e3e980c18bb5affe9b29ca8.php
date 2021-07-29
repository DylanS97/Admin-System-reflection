<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__(ucfirst($company->name))); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="w-full shadow">
        <div class="flex max-w-7xl mx-auto px-10 pt-8">
            <div class="block rounded-t-md <?php if(strpos(url()->current(), '/' . $company->id) != '' && strpos(url()->current(), '/employees') == ''): ?>bg-gray-200 border-gray-300 border-2 border-b-0 <?php endif; ?>">
                <a href="/companies/<?php echo e($company->id); ?>" class="block p-4 hover:underline"><span>Details</span></a>
            </div>
            <div class="rounded-t-md <?php if(strpos(url()->current(), '/employees') != ''): ?>bg-gray-200 border-gray-300 border-2 border-b-0 <?php endif; ?>">
                <a href="/companies/<?php echo e($company->id); ?>/employees" class="block p-4 hover:underline"><span>Employees</span></a>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

<?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Admin-System-reflection\resources\views/layouts/company.blade.php ENDPATH**/ ?>