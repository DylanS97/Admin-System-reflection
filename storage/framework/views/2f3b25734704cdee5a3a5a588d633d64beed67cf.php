<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Employees')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="w-full py-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            <div class="text-3xl font-semibold">
                <div class="page">
                    <form>
                        <select name="Paginate" id="paginate" class="rounded-lg transition-shadow paginator">
                            <option value="10" <?php if($items == 10): ?> selected <?php endif; ?>>10</option>
                            <option value="25" <?php if($items == 25): ?> selected <?php endif; ?>>25</option>
                            <option value="50" <?php if($items == 50): ?> selected <?php endif; ?>>50</option>
                            <option value="100" <?php if($items == 100): ?> selected <?php endif; ?>>100</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="">
                <div class="">
                    <form action="">
                        <select name="Company" id="company-select">
                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($company['name']); ?>"><?php echo e($company['name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </form>
                </div>
            </div>
            <div class="flex justify-end flex-grow">
                <div id="search-container" class="min-w-half relative">
                    <form method="GET" action="#" class="flex min-w-full absolute bottom-0">
                        <?php echo csrf_field(); ?>
                        <label for="search" class="text-base font-medium mr-4"><span class="relative top-2">Search</span></label>
                        <input value="<?php echo e(request('search')); ?>" id="search" name="search" type="text" class="rounded-lg w-full sm\:focus\:border-red-500:focus transition-shadow">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="max-w-7xl mx-auto p-10">
            <table id="inner-table-container" class="w-full">
                <tr>
                    <i></i>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th class="width-300">Email</th>
                    <th>Contact No.</th>
                </tr>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="row" class="">
                        <td class="text-center border-2">
                            <a href="/employees/<?php echo e($employee['name']); ?>" class="p-3"><?php echo e($employee['id']); ?></a>
                        </td>
                        <td class="border-2">
                            <a href="/employees/<?php echo e($employee['name']); ?>" class="p-3"><?php echo e($employee['first_name'] . ' ' . $employee['last_name']); ?></a>
                        </td>
                        <td class="border-2">
                            <div class="p-3">
                                <?php echo e($employee['company_name']); ?>

                            </div>
                        </td>
                        <td class="border-2">
                            <div class="p-3">
                                <?php echo e($employee['email']); ?>

                            </div>
                        </td>
                        <td class="border-2">
                            <div class="p-3">
                                <?php echo e($employee['phone_number']); ?>

                            </div>
                        </td>
                        <td class="border-2 width-80">
                            <a href="/employees/<?php echo e($employee['name']); ?>" title="View Company">
                                <i class="far fa-eye mx-2 text-gray-700"></i>
                            </a>
                            
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>

    <div class="">
        <span class="block max-w-7xl mx-auto px-10">
            <?php echo e($employees->appends(compact('items'))->links()); ?>

            
        </span>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/employees.blade.php ENDPATH**/ ?>