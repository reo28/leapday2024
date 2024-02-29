
<?php if (isset($component)) { $__componentOriginalb0d1ec99939ae2f1896b481842718c8d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb0d1ec99939ae2f1896b481842718c8d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app2-layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app2-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>adminnn</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
         <?php $__env->slot('header', null, []); ?> 
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <?php echo e(__('Dashboarddd')); ?>

            </h2>
         <?php $__env->endSlot(); ?>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form action="/admin/logout" method="POST">
                            <?php echo csrf_field(); ?>
                        <button>logout..plz</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb0d1ec99939ae2f1896b481842718c8d)): ?>
<?php $attributes = $__attributesOriginalb0d1ec99939ae2f1896b481842718c8d; ?>
<?php unset($__attributesOriginalb0d1ec99939ae2f1896b481842718c8d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb0d1ec99939ae2f1896b481842718c8d)): ?>
<?php $component = $__componentOriginalb0d1ec99939ae2f1896b481842718c8d; ?>
<?php unset($__componentOriginalb0d1ec99939ae2f1896b481842718c8d); ?>
<?php endif; ?>
    <?php /**PATH C:\multi-2722024\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>