
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('components.error-box', [
        'content' => 'Company details already exist in the database.'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Companies')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="w-full py-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            <?php echo $__env->make('components.paginate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('components.search-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="flex justify-end">
                <a class="ml-10" href="/companies/create" title="Add Company"><i class="far fa-plus-square text-green-500 hover:text-green-600" style="font-size: 41px"></i></a>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto p-10">
            <table id="inner-table-container" class="w-full">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="width-500">Website</th>
                </tr>
                <?php if(count($companies) > 0): ?>
                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr id="row" class="bg-white">
                            <td class="text-center border-2">
                                <a href="/companies/<?php echo e($company->id); ?>" class="p-3 hover:underline"><?php echo e($company->id); ?></a>
                            </td>
                            <td class="border-2">
                                <a href="/companies/<?php echo e($company->id); ?>" class="p-3 hover:underline"><?php echo e(ucfirst($company->name)); ?></a>
                            </td>
                            <td class="border-2">
                                <div class="p-3">
                                    <?php echo e($company->email); ?>

                                </div>
                            </td>
                            <td class="border-2"><span class="block p-3 overflow-hidden overflow-ellipsis whitespace-nowrap width-500"><?php echo e($company->website); ?></span></td>
                            <td class="border-2 width-120">
                                <a class="inline-block w-min mx-auto" href="/companies/<?php echo e($company->id); ?>/edit" title="Edit <?php echo e($company->name); ?>">
                                    <i class="far fa-edit mx-2 text-gray-700"></i>
                                </a>
                                <a class="inline-block w-min mx-auto" href="/companies/<?php echo e($company->id); ?>" title="View Company">
                                    <i class="far fa-eye mx-2 text-gray-700"></i>
                                </a>
                                <a class="inline-block w-min mx-auto" href="/companies/<?php echo e($company->id); ?>/employees" title="View Employees">
                                    <i class="fas fa-users mx-2 text-gray-700"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr><td colspan="4" class="text-center pt-10 text-2xl text-gray-300 font-semibold">No companies on record.</td></tr>
                <?php endif; ?>
            </table>
        </div>
    </div>

    <div class="">
        <span class="block max-w-7xl mx-auto px-10 pb-10">
            <?php echo e($companies->appends(compact('items'))->links()); ?>

        </span>
    </div>
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
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Admin-System-reflection\resources\views/companies/index.blade.php ENDPATH**/ ?>