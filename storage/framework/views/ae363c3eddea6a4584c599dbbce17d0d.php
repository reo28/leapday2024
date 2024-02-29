<!DOCTYPE html>
<html>
<head>
    <title>import corporations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
            <h4>import</h4>
        </div>
       
            <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                   
                    <button class="btn btn-primary me-md-2" onclick="window.location='/dashboard'" type="button">Dashboard</button>
                </div>   
            </div>
        
        <div class="card-body">
            <form action='/corp/import' method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label for="file" class="mb-3 fs-5">upload file here:</label>
                <input required placeholder="e.g. Mike Shinoda" id='file'  type="file" name="file" class="form-control" >
                <br> 
                <button class="btn btn-primary">Import corporation Data</button>
            </form>
        </div>
    </div>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
	        <ul>
		        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
		    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	        </ul>
            </div>
            <?php endif; ?>
    <div>
    <form class="d-flex justify-content-md-end bg-light" type= "get" action= "/search">
        <div class="d-grid gap-2 d-md-flex ">
            <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success justify-content-md-end" type="submit">Search</button>
        </div>
    </form>
        <table class="table table-bordered mt-3">
            <tr>
                <th colspan="3">
                    List Of Corporations
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Adress</th>
               
            </tr>
            <?php $__currentLoopData = $corporations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corporation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($corporation->id); ?></td>
                <td><?php echo e($corporation->name); ?></td>
                <td><?php echo e($corporation->adress); ?></td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div>
</body>
</html><?php /**PATH C:\multi-2722024\resources\views/tasks/import-corporation-page.blade.php ENDPATH**/ ?>