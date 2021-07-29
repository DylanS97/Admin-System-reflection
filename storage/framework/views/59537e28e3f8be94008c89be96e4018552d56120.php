
<tr id="row" class="">
    <td class="text-center border-2">
        <a href="#" class="p-3"><?php echo e($company->id); ?></a>
    </td>
    <td class="border-2">
        <a href="#" class="p-3"><?php echo e($company->name); ?></a>
    </td>
    <td class="border-2">
        <div class="p-3">
            <?php echo e($company->email); ?>

        </div>
    </td>
    <td class="border-2"><span class="block p-3 overflow-hidden overflow-ellipsis whitespace-nowrap width-500"><?php echo e($company->website_url); ?></span></td>
    <td class="border-2 width-80">
        <a href="#" title="View Company">
            <i class="far fa-eye mx-2 text-gray-700"></i>
        </a>
        <a href="#" title="Employees" class="float-right">
            <i class="fas fa-users mx-2 text-gray-700"></i>
        </a>
    </td>
</tr><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\laravel-reflection\resources\views/companies/partials/row.blade.php ENDPATH**/ ?>