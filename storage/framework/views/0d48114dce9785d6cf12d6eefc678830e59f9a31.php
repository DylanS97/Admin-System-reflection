<div class="text-3xl font-semibold">
    <div class="page">
        <form action="">
            <select name="Paginate" id="paginate" class="rounded-lg paginator">
                <option value="10" <?php if($items == 10): ?> selected <?php endif; ?>>10</option>
                <option value="25" <?php if($items == 25): ?> selected <?php endif; ?>>25</option>
                <option value="50" <?php if($items == 50): ?> selected <?php endif; ?>>50</option>
                <option value="100" <?php if($items == 100): ?> selected <?php endif; ?>>100</option>
            </select>
        </form>
    </div>
</div><?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Admin-System-reflection\resources\views/components/paginate.blade.php ENDPATH**/ ?>