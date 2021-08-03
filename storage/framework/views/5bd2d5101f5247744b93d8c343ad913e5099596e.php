<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php echo $__env->make('components.error-box', [
        'content' => 'Employee details already exist in the database.'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__( $employee->first_name . ' ' . $employee->last_name)); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <?php echo $__env->make('components.edit-delete-back-buttons', [
        'back' => '/employees',
        'edit_link' => '/employees/' . $employee->id . '/edit',
        'val' => 'Employee',
        'content' => ''
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="w-full pt-8">
        <div class="max-w-7xl px-10 mx-auto">
            <div class="shadow p-8 rounded-2xl flex bg-gray-50">
                <div class="flex-1">
                    <div class="text-center pb-8"><h1 class="text-4xl font-bold"><?php echo e($employee->first_name); ?> <?php echo e($employee->last_name); ?></h1></div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Employed Since:</strong></span>
                            <span><?php echo e($employee->created_at->format('d F Y')); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Employer:</strong></span>
                            <span><a href="/companies/<?php echo e($employee->company_id); ?>" class="hover:underline"><?php echo e(ucfirst($employee->company->name)); ?></a></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Email:</strong></span>
                            <span><?php echo e($employee->email); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex py-2">
                            <span class="flex-1"><strong>Contact No.:</strong></span>
                            <span><?php echo e($employee->phone_number); ?></span>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <img src="/storage/<?php echo e($employee->company->logo); ?>" alt="<?php echo e($employee->company->name); ?>" class="h-full max-w-md max-h-60 float-right">
                    <span class="inline-block float-right pr-4"><strong>Employer Logo:</strong></span>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('components.confirm-delete', [
        'slug' => '/employees/' . $employee->id,
        'title' => 'Employee ' . ucfirst($employee->first_name) . ' ' . ucfirst($employee->last_name)
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
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Admin-System-reflection\resources\views/employees/show.blade.php ENDPATH**/ ?>