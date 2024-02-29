<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!DOCTYPE html>
<html>
<head>
    <title>import</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
    <?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="card justify-center" style="width:30rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($task->title); ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"> <?php echo e($task->updated_at->format('Y/m/d')); ?></h6>
          <p class="card-text"><?php echo e($task->body); ?></p>
          <div>
          <class="card-link">starts : <?php echo e($task->start_date); ?></a>
          <class="card-link">ends : <?php echo e($task->end_date); ?></a>
        </div>
        <div>
        <form action="<?php echo e(url('/delete-task/'.$task->id)); ?>" method="POST" class="card-link btn-outline-danger">
          <?php echo method_field('DELETE'); ?>
          <?php echo e(csrf_field()); ?>

          <button>Delete</button>
        </form>
        <form action="<?php echo e(url('/edit-task/'.$task->id)); ?>" method="GET" class="btn-outline-primary">
          <button>Edit</button>
        </form>
      </div>
        </div>
      </div>


      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>    

<?php /**PATH C:\multi-2722024\resources\views/tasks/added-tasks.blade.php ENDPATH**/ ?>