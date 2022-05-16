<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <title>Admin Panel</title>
</head>

<body>
    <?php include 'top.php'; ?>
    <!-- MAIN -->
    <main>
        <h1 class="title">Insert Category</h1>
        <ul class="breadcrumbs">
            <li><a href="#">Home</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Insert Category</a></li>
        </ul>
        <section class="insert-category">
            <div class="container">
                <div class="admin-title">
                    <h4>Insert Category</h4>
                </div>
                <form>
                    <span>Category Title</span>
                    <input type="text" name="category">
                </form>
            </div>
        </section>

        <?php include 'bottom.php'; ?>
</body>

</html>