<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=|, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Restaurant Reviews</h1>

    <div>
        <p>Click button dibawah ini untuk menambahkan review</p>
        <a href="/add_review" class="btn btn-outline-primary">Add Review</a>
    </div>
    <br>
    <div>
        <p>List Restaurant Review</p>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Photo</th>
                <th scope="col">Restaurant Name</th>
                <th scope="col">Location</th>
                <th scope="col">Rate</th>
                <th scope="col">Reviews</th>
              </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $list_restaurant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restaurant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($restaurant->id); ?></th>
                        <td>
                            <img src="<?php echo e(asset('storage/'.$restaurant->Restaurant_image_path)); ?>" style="width: 20%" alt="">
                        </td>
                        <td><?php echo e($restaurant->Restaurant_Name); ?></td>
                        <td><?php echo e($restaurant->location->Location_name); ?></td>
                        <td><?php echo e($restaurant->Rate); ?></td>
                        <td><?php echo e($restaurant->Reviews); ?></td>
                        <th>
                            <form action="/delete-review/<?php echo e($restaurant->id); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </th>
                        <th><a type="button" class="btn btn-success" href="/update-review-page/<?php echo e($restaurant->id); ?>">Update</a></th>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\PROJECT-TPM-BNCC\projectTPM-2\resources\views/home.blade.php ENDPATH**/ ?>