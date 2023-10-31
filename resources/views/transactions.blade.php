{{-- <!DOCTYPE html>
<html>
<head>

    <title>Transactions Table</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <h2>Transactions Data</h2>


        <table class="table display" id="articles-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Description</th>
            </tr>
            </thead>
        </table>

    </div>
    <script>
        $(document).ready(function() {
            $('#articles-table').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 5,
                ajax: "{{ route('data') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'amount', name: 'amount' },
                    { data: 'description', name: 'description' },
                ]
            });
        });
    </script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>

    <title>Transactions Table</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <h2>Transactions Data</h2>


        <table class="table display" id="articles-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Description</th>
            </tr>
            </thead>
        </table>

    </div>
    <script>
        $(document).ready(function() {
            $('#articles-table').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 5,
                ajax: "{{ route('data') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'amount', name: 'amount' },
                    { data: 'description', name: 'description' },
                ]
            });
        });
    </script>

</body>
</html>
 --}}





 <!DOCTYPE html>
<html>
<head>
    <title>All Transactions</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>

    <div class="container">
        <h2>All Transactions</h2>
        {{-- <table id="articles-table" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Bio</th>
                </tr>
            </thead>
        </table> --}}



        <table class="table display" id="articles-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Status</th>
                <th>Description</th>
            </tr>
            </thead>
        </table>

    </div>
    <script>
        $(document).ready(function() {
            $('#articles-table').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 5,
                ajax: "{{ route('data') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'amount', name: 'amount' },
                    { data: 'currency', name: 'currency' },
                    { data: 'status', name: 'status' },
                    { data: 'description', name: 'description' },
                ]
            });
        });
    </script>

</body>
</html>
