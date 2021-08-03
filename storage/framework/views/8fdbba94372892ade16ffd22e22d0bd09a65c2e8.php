
<form>
    <select name="Company" id="company-select" class="rounded-lg transition-shadow ml-5 companySelect">
        <option value="" label="-- Company --" disabled <?php if($com == ''): ?> selected <?php endif; ?>></option>
        <option value="/" label="All" <?php if($com == 'all'): ?> selected <?php endif; ?>>
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($company->id); ?>" <?php if($com == $company->name): ?> selected <?php endif; ?>><?php echo e($company->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</form><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Admin-System-reflection\resources\views/components/company-select.blade.php ENDPATH**/ ?>