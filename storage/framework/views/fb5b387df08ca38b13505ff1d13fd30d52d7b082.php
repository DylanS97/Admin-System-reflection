

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('components.edit-delete-back-buttons', [
        'back' => '/companies',
        'edit_link' => '/companies/' . $company->id . '/edit',
        'val' => 'Company',
        'content' => ''
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="w-full pt-8">
        <div class="max-w-7xl px-10 mx-auto">
            <div class="shadow p-8 rounded-2xl flex bg-gray-50">
                <div class="flex-1">
                    <div class="text-center pb-8"><h1 class="text-4xl font-bold"><?php echo e(ucfirst($company->name)); ?></h1></div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Active Since:</strong></span>
                            <span><?php echo e($company->created_at->format('d F Y')); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Total Employees:</strong></span>
                            <span><?php echo e($company->employees->count()); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Email:</strong></span>
                            <span><?php echo e($company->email); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Website:</strong></span>
                            <span><?php echo e($company->website); ?></span>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="/storage/<?php echo e($company->logo); ?>" alt="<?php echo e($company->name); ?>" class="mx-auto h-full max-w-md">
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('components.confirm-delete', [
        'slug' => '/companies/' . $company->id,
        'title' => 'Company ' . ucfirst($company->name)
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Reflections\Admin-System-reflection\resources\views/companies/show.blade.php ENDPATH**/ ?>