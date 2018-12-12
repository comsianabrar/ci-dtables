<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>vendor/datatables/datatables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" href="<?= base_url(); ?>vendor/datatables/datatables/media/css/dataTables.bootstrap4.css">
    <title>Users List</title>
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <h3 style="margin-bottom: 50px;"> Datatables with Server Side Processing - CodeIgniter</h3>

    <table class="table">
        <thead>
        <tr>
            <th>SKU ID</th>
            <th>Name</th>
            <th>In Stock</th>
            <th>Created Date</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>SKU ID</th>
            <th>Name</th>
            <th>In Stock</th>
            <th>Created Date</th>
        </tr>
        </tfoot>
        <tbody>
        </tbody>
    </table>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url(); ?>vendor/datatables/datatables/media/js/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script src="<?= base_url(); ?>vendor/datatables/datatables/media/js/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>vendor/datatables/datatables/media/js/dataTables.dataTables.js"></script>
<script src="<?= base_url(); ?>vendor/datatables/datatables/media/js/dataTables.bootstrap4.js"></script>

<script>
    $(document).ready(function () {
        $('table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "<?=base_url()?>index.php/products/server_side_processing"
        });
    });
</script>
</body>
</html>