<!-- This file display the code on the view feedback button -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Feedback</title>
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
body{
    font-family: Book Antiqua;
}</style>

<body>   
        <center>
        <div class="overflow-x:auto;"> 
        <table class="table";>
        <thead>
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">FirstName</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Message</th>
                <th scope="col">DateTime</th>
            </tr>
        </thead>
        @foreach($facts as $fact)
        <tr>
                    <td>{{$fact['id']}}</td>
                    <td>{{$fact['fname']}}</td>
                    <td>{{$fact['lname']}}</td>
                    <td>{{$fact['email']}}</td>
                    <td>{{$fact['phone']}}</td>
                    <td>{{$fact['message']}}</td>
                    <td>{{$fact['dt']}}</td>
        </tr>
        @endforeach

</table> </div></center>

</body>
