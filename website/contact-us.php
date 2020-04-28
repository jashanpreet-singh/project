
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body><center> 
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13719.389018702837!2d76.6990059471202!3d30.722694212496055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee5a42944be3%3A0xb713d3a3e26a89c1!2sSachTech+Solution+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1561707463141!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/I0-5Xcp71I8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> -->
          <div class="col-md-6 p-4">
                <form action="contact.php" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Subtitle</label>
                                <select class="form-control" name="subtitle">
                                    <option value="">Mr.</option>
                                    <option value="">Miss.</option>
                                </select>
                            </div> 
                            <div class="col-md-5">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name...">
                            </div>
                            <div class="col-md-5">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name...">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email...">
                    </div>
                    <div class="form-group">
                        <label for="">Message</label>
                        <input rows="5" placeholder="Message Here" name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="SEND FEEDBACK" class="btn btn-outline-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</center> 
</body> 
</html>