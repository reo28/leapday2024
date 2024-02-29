<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Reos shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="main.css" />
</head>
<body>
<div class="container py-md-5 container--narrow">
    <h2>EDIT store</h2>
    <form action="<?php echo e(url('/edit-store/'.$store->id)); ?>" method="POST">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <input type="hidden" value="<?php echo e($store->id); ?>" name="id">
      <div class="form-group">
        <label for="post-name" class="text-muted mb-1"><small>name</small></label>
        <input value="<?php echo e(old('name') ?? $store->name); ?>" required name="name" id="post-name" class="form-control form-control-lg form-control-name" type="text" placeholder="" autocomplete="off" />
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="m-0 small alret alert-danger shadow-sm"><?php echo e($message); ?></p> 
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="form-group" value="<?php echo e(old('adress') ?? $store->adress); ?>">
        <label for="post-adress" class="text-muted mb-1"><small>Description</small></label>
        <input name="adress" id="post-adress"  class="body-content tall-textarea form-control" type="text" value="<?php echo e(old('adress') ?? $store->adress); ?>" class="form-control form-control-lg form-control-name" type="text" placeholder="" autocomplete="off" />
        <?php $__errorArgs = ['adress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="m-0 small alret alert-danger shadow-sm"><?php echo e($message); ?></p> 
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <button class="btn btn-primary">Save Edited store</button>
    </form>
  </div>
</body><?php /**PATH C:\multi-2722024\resources\views/store/edit-store.blade.php ENDPATH**/ ?>