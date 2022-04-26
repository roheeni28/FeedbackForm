<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Feedback Form</title>
    <!-- Custom styles for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
body{
    font-family: Book Antiqua;
    width: 100%;
    max-width: 950px;
    background: #fff;
    margin: 0 auto;
    padding: 15px;
}</style>

<body>
    <main class="container">
        <div class="bg-dark p-4 rounded mt-5">
            <div class="card">
                <div class="card-body">
                    <center>
                        <b><h3 class="card-title">Submit Your Feedback</h3></b>
                        <div>
                            <div class="card o-hidden border-0 shadow-lg">
                                <div class="card-body p-5">
                                    <div class="col-lg-10">
                                        <div class="p-9">

                                        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                                            <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;">
                                            <?php echo $_SESSION['success_message']; ?></div>
                                            <?php
                                            unset($_SESSION['success_message']);
                                        }
                                        ?>      <!-- session used for the display the message of data inserted successfully. -->

                                            <form class="user" action="/" method="POST">
                                                @csrf
                                                <div class="form-group row mb-4">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Your First Name" required>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="Your Last Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address" required>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <input type="phone " class="form-control" id="phone" name="phone" placeholder="Your Mobile Number">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <textArea type="message" class="form-control form-control-user" id="message" name="message" placeholder="Enter Your Feedbcak Message" required></textArea>
                                                </div>

                                               <button type="submit" id="submit" name="submit" class="btn btn-success btn-user btn-block">
                                                    Submit </button> 

                                                <a href="list" button type="button" class="btn btn-danger">View Feedbacks </button>
                                                    <a href="viewdb.php" class="button button-primary button-block" id="button" name="button">
                                                        </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>
</body>
</center>

</html>