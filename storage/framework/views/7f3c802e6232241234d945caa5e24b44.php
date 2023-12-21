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
                <th scope="col">id</th>
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
                        <td><?php echo e($restaurant->Restaurant_Name); ?></td>
                        <td><?php echo e($restaurant->Location); ?></td>
                        <td><?php echo e($restaurant->Rate); ?></td>
                        <td><?php echo e($restaurant->Reviews); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </tbody>
          </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html><?php /**PATH C:\PROJECT-TPM-BNCC\projectTPM\resources\views/home.blade.php ENDPATH**/ ?>