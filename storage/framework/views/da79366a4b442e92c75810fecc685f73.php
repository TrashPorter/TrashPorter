<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="resources/css/app.css" rel="stylesheet">


    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="h-screen ">
    <div class="min-h-screen ">
        <header class="absolute w-10 py-2 mx-4 hover:animate-pulse">
            <a href=""><img src="assets/img/back-arrow.png" alt="gambar"></a>
        </header>

        <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-gradient-to-r from-cyan-500 to-blue-500">

            <div class="flex justify-center">
                <div class="mx-6 justify-center">
                    <h2 class="font-bold text-3xl w-full tracking-tight text-white">TrashPorter</h2>
                </div>

            </div>
            <div class="flex justify-center mt-1 px-6">
                <p class="text-white"> Reduce, reuse, and recycle to prevent further damage to our environment</p>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg ">
                <div class="w-24 mx-auto flex justify-center">
                    <a href="/">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['class' => 'w-20 h-20 fill-current text-gray-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-20 h-20 fill-current text-gray-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </a>
                </div>

                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</body>

</html><?php /**PATH /home/fatiya/Documents/Trashporter/INF206-2023-DY1-TrashPorter/resources/views/layouts/guest.blade.php ENDPATH**/ ?>