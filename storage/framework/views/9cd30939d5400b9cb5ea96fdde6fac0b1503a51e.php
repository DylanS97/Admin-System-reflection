var_dump($companies);

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Companies')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="w-full py-8 shadow">
        <div class="flex max-w-7xl mx-auto px-10">
            <div class="text-3xl font-semibold">
                <div class="page">
                    <form action="submit" name="pagination" method="POST">
                        <select form="pagination" name="paginate" id="paginate" class="rounded-lg transition-shadow">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="flex justify-end flex-grow">
                <div id="search-container" class="min-w-half relative">
                    <form action="#" class="flex min-w-full absolute bottom-0">
                        <label for="search" class="text-base font-medium mr-4"><span class="relative top-2">Search</span></label>
                        <input id="search" name="search" type="text" class="rounded-lg w-full sm\:focus\:border-red-500:focus transition-shadow">
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
                    <th>Email</th>
                    <th class="width-500">Website</th>
                </tr>
                
                <?php echo $__env->renderEach('companies.partials.row', $companies, 'company', 'companies.partials.row-empty'); ?>
            </table>
        </div>
    </div>

    <?php if($companies->hasPages()): ?>
        <div class="pagination-center">
            <?php echo e($companies->links()); ?>

        </div>
    <?php endif; ?>
    
    

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views//companies/index.blade.php ENDPATH**/ ?>