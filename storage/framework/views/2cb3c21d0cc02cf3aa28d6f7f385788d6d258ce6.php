

<?php $__env->startSection('content'); ?>
    <div class="w-full pt-8">
        <div class="max-w-7xl px-10 mx-auto">
            <div class="shadow p-8 rounded-2xl flex bg-gray-50">
                <div class="flex-1">
                    <div class="text-center pb-8"><h1 class="text-4xl font-bold"><?php echo e($company['name']); ?></h1></div>
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
                            <span><?php echo e($company['email']); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Website:</strong></span>
                            <span><?php echo e($company['website_url']); ?></span>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="/storage/images/<?php echo e($company['logo']); ?>" alt="<?php echo e($company['name']); ?>" class="mx-auto h-full">
                </div>
            </div>
        </div>
    </div>
    
    <div class="">
        <div class="max-w-7xl mx-auto px-10 pt-10">
            <div class="flex justify-end">
                <a class="mr-6" href="/companies/<?php echo e($company->name); ?>/edit" title="Edit Company"><i class="far fa-edit text-green-500 text-4xl"></i></a>
                <form method="POST" action="delete">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="" type="submit" title="Delete Company"><i class="far fa-trash-alt text-red-500 text-4xl"></i></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/companies/companyDetails.blade.php ENDPATH**/ ?>