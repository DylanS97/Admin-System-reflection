

<?php $__env->startSection('content'); ?>
    <div class="w-full py-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            <div class="text-3xl font-semibold">
                <div class="page">
                    <form action="">
                        <select name="Paginate" id="paginate" class="rounded-lg transition-shadow paginator">
                            <option value="10" <?php if($items == 10): ?> selected <?php endif; ?>>10</option>
                            <option value="25" <?php if($items == 25): ?> selected <?php endif; ?>>25</option>
                            <option value="50" <?php if($items == 50): ?> selected <?php endif; ?>>50</option>
                            <option value="100" <?php if($items == 100): ?> selected <?php endif; ?>>100</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="flex justify-end flex-grow">
                <div id="search-container" class="min-w-half relative">
                    <form method="GET" action="" class="flex min-w-full absolute bottom-0">
                        <?php echo csrf_field(); ?>
                        <label for="search" class="text-base font-medium mr-4"><span class="relative top-2">Search</span></label>
                        <input value="<?php echo e(request('search')); ?>" id="search" name="search" type="text" class="rounded-lg w-full sm\:focus\:border-red-500:focus transition-shadow">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="">
        <div class="max-w-7xl mx-auto px-10 pt-10">
            <div class="flex justify-end">
                <a class="" href="/companies/<?php echo e($employees[0]->company->name); ?>/employees/create" title="Add Employee"><i class="fas fa-plus-square text-green-500 text-5xl"></i></a>
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
                    <th class="width-500">Email</th>
                    <th>Contact No.</th>
                </tr>
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="row" class="bg-white">
                        <td class="text-center border-2">
                            <a href="/employees/<?php echo e($employee['id']); ?>" class="p-3"><?php echo e($employee['id']); ?></a>
                        </td>
                        <td class="border-2">
                            <a href="/employees/<?php echo e($employee['id']); ?>" class="p-3"><?php echo e($employee['first_name'] . ' ' . $employee['last_name']); ?></a>
                        </td>
                        <td class="border-2">
                            <a href="/companies/<?php echo e($employee->company->name); ?>/details" class="p-3"><?php echo e($employee->company->name); ?></a>
                        </td>
                        <td class="border-2">
                            <div class="p-3">
                                <?php echo e($employee['email']); ?>

                            </div>
                        </td>
                        <td class="border-2 "><span class="block p-3 overflow-hidden overflow-ellipsis whitespace-nowrap width-300"><?php echo e($employee['phone_number']); ?></span></td>
                        <td class="border-2 width-80">
                            <a href="/employees/<?php echo e($employee['id']); ?>" title="View <?php echo e($employee['first_name']); ?>" class="block w-min mx-auto">
                                <i class="far fa-eye mx-2 text-gray-700"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>

    <div class="">
        <span class="block max-w-7xl mx-auto px-10 pb-10">
            <?php echo e($employees->appends(compact('items'))->links()); ?>

        </span>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/companies/companyEmployees.blade.php ENDPATH**/ ?>