

<?php $__env->startSection('content'); ?>
    <div class="w-full py-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            <?php echo $__env->make('components.paginate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('components.search-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    
    <?php $__env->startComponent('components.edit-delete-back-buttons', [ 
        'back' => '/companies/' . $company->id,
        'edit_link' => '/companies/' . $company->id . '/edit',
        'val' => 'Company'
    ]); ?>
        <?php $__env->slot('content'); ?>
            <a class="mx-3" href="/companies/<?php echo e($company->id); ?>/employees/create" title="Add Employee">
                <i class="far fa-plus-square text-green-500 hover:text-green-600 text-4xl" style="margin-top: 2px"></i>
            </a>
        <?php $__env->endSlot(); ?>
    <?php if (isset($__componentOriginalb0acd52a87609722c22344b4cffd83dc3c7bd084)): ?>
<?php $component = $__componentOriginalb0acd52a87609722c22344b4cffd83dc3c7bd084; ?>
<?php unset($__componentOriginalb0acd52a87609722c22344b4cffd83dc3c7bd084); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <div class="">
        <?php echo $__env->make('components.employees-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="">
        <span class="block max-w-7xl mx-auto px-10 pb-10">
            <?php echo e($employees->appends(compact('items'))->links()); ?>

        </span>
    </div>
    <?php echo $__env->make('components.confirm-delete', [
        'slug' => '/companies/' . $company->id,
        'title' => 'Company ' . ucfirst($company->name)
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Reflections\Admin-System-reflection\resources\views/companies/employees.blade.php ENDPATH**/ ?>