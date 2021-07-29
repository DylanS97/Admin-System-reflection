

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.error-box', [
        'content' => 'Employee details already exist in the database.'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <a class="mx-3" href="/employees/create" title="Add Employee">
                <i class="far fa-plus-square text-green-500 hover:text-green-600 text-4xl" style="margin-top: 2px"></i>
            </a>
        <?php $__env->endSlot(); ?>
    <?php if (isset($__componentOriginalb0acd52a87609722c22344b4cffd83dc3c7bd084)): ?>
<?php $component = $__componentOriginalb0acd52a87609722c22344b4cffd83dc3c7bd084; ?>
<?php unset($__componentOriginalb0acd52a87609722c22344b4cffd83dc3c7bd084); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    
    <div class="">
        <div class="max-w-7xl mx-auto px-10 pt-10">
            <div class="flex justify-end">
            </div>
        </div>
    </div>

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
    <?php if($errors->any()): ?>
        <?php if($errors->first() == 1062): ?>
            <script>
                function errorHandler() {
                    // document.querySelector('#error-popup').classList.remove('-top-full');
                    document.querySelector('#error-popup').classList.add('show-popup');
                    setTimeout(() => {
                        document.querySelector('#error-popup').classList.remove('show-popup');
                        // document.querySelector('#error-popup').classList.add('-top-full');
                    }, 3000);
                }
                errorHandler();
                </script>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/companies/employees.blade.php ENDPATH**/ ?>