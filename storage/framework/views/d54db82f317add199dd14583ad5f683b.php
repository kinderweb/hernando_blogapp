<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hernando|Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-5" style="width: 100%; max-width: 800px; background-color:rgb(187, 216, 247);">

        <h1 class="mb-4 text-center">Edit Post</h1>

        <form action="/posts/<?php echo e($post->id); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control rounded-pill" id="title" value="<?php echo e($post->title); ?>" required>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Content</label>
                <textarea name="body" class="form-control " id="body" rows="5" required><?php echo e($post->body); ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Update Post
            </button>

            <a href="/posts" class="btn btn-secondary ms-2">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </form>

    </div>
</div>

</body>
</html><?php /**PATH C:\Users\Sealtiel Hernando\hernando_blogapp\resources\views/posts/edit.blade.php ENDPATH**/ ?>