<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <?php echo e($header); ?>

                </div>
            </header>

            <!-- Page Content -->
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
        <script>
            let paginator = Array.prototype.slice.call(document.querySelectorAll('.paginator'));
            paginator.forEach(pagin => {
                pagin.onchange = function() {
                window.location = "<?php echo e(URL::current()); ?>?items=" + this.value;
                };
            });
            let companies = Array.prototype.slice.call(document.querySelectorAll('.companySelect'));
            companies.forEach(company => {
                company.onchange = function() {
                    if (this.value != "" && this.value != "/") {
                        <?php if(strpos(URL::current(), '/company/')): ?> 
                            window.location = "/employees/company/" + this.value
                        <?php else: ?>
                            window.location = "<?php echo e(URL::current()); ?>/company/" + this.value;
                        <?php endif; ?>
                    } else {
                        window.location = "/employees";
                    }
                };
            });
            function getImage(input) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $('#preview-image').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#logo').change(function() {
                getImage(this);
            })
            function showConfirmDelete() {
                $('#confirm-delete').removeClass('hidden');
            }
            $('#delete-button').on('click', function() {
                showConfirmDelete();
            })
            function hideConfirmDelete() {
                $('#confirm-delete').addClass('hidden');
            }
            $('#confirmed-delete').on('click', function() {
                hideConfirmDelete();
            })
            $('#cancel-delete').on('click', function() {
                hideConfirmDelete();
            })
        </script>
    </body>
</html>
<?php /**PATH C:\Users\Dylan\OneDrive\Desktop\Programming\Netmatters\Reflections\Admin-System-reflection\resources\views/layouts/app.blade.php ENDPATH**/ ?>