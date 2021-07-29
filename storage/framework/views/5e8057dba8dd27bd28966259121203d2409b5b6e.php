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
    
        <?php if(count($employees) > 0): ?>
            <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="row" class="bg-white">
                    <td class="text-center border-2">
                        <a href="/employees/<?php echo e($employee->id); ?>" class="p-3 hover:underline"><?php echo e($employee->id); ?></a>
                    </td>
                    <td class="border-2">
                        <a href="/employees/<?php echo e($employee->id); ?>" class="p-3 hover:underline"><?php echo e(ucfirst($employee->first_name) . ' ' . ucfirst($employee->last_name)); ?></a>
                    </td>
                    <td class="border-2">
                        <a href="/companies/<?php echo e($employee->company_id); ?>" class="p-3 hover:underline"><?php echo e(ucfirst($employee->company->name)); ?></a>
                    </td>
                    <td class="border-2">
                        <div class="p-3">
                            <?php echo e($employee->email); ?>

                        </div>
                    </td>
                    <td class="border-2">
                        <div class="p-3">
                            <?php echo e($employee->phone_number); ?>

                        </div>
                    </td>
                    <td class="border-2 width-80">
                        <a class="inline-block w-min mx-auto" href="/employees/<?php echo e($employee->id); ?>/edit" title="Edit <?php echo e($employee->first_name); ?>">
                            <i class="far fa-edit mx-2 text-gray-700"></i>
                        </a>
                        <a href="/employees/<?php echo e($employee->id); ?>" title="View <?php echo e($employee->first_name); ?>" class="inline-block w-min mx-auto">
                            <i class="far fa-eye mx-2 text-gray-700"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <tr><td colspan="5" class="text-center pt-10 text-2xl text-gray-300 font-semibold">No employees on record.</td></tr>
        <?php endif; ?>
    </table>
</div><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/components/employees-table.blade.php ENDPATH**/ ?>