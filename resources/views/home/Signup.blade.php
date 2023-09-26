<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign Up</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="{{asset('home/styles/bootstrap4/bootstrap.min.css')}}">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css'">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/responsive.css')}}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* .form-section{
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
        } */

        .form-group {
            margin-bottom: 15px;
            padding: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            font-size: 18px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="super_container">

    <x-navbar/>

    <div class="container" style="margin-top: 200px">
            <h2>SignUp Form</h2>
            <form id="userForm" enctype="multipart/form-data">
                <!-- User Information Section -->
                <div class="form-section">
                    <h3>User</h3>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact Number:</label>
                        <input type="tel" id="contact" name="contact" placeholder="Enter Contact Number" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" id="image" name="image">
                    </div>
                </div>


                <!-- Academic Details Section -->
                <div class="form-section">
                    <h3>Academic Details</h3>
                    <div class="form-group">
                        <label for="passedYear">Passed Year:</label>
                        <input type="text" id="passedYear" name="passedYear" placeholder="Enter Passed Year" required>
                    </div>
                    <div class="form-group">
                        <label for="previousYear">Previous Year:</label>
                        <input type="text" id="previousYear" name="previousYear" placeholder="Enter Previous Year" required>
                    </div>
                    <div class="form-group">
                        <label for="gpa">GPA:</label>
                        <input type="text" id="gpa" name="gpa" placeholder="Enter GPA" required>
                    </div>
                </div>

                <!-- Interests Section -->
                <div class="form-group">
                    <label for="interests"><h3>Interests:</h3></label>
                    <textarea id="interests" name="interests" rows="3" placeholder="Enter Interests" required></textarea>
                </div>

                <!-- Goals Section -->
                <div class="form-group">
                    <label for="goals"><h3>Goals:</h3></label>
                    <textarea id="goals" name="goals" rows="3" placeholder="Enter Goals" required></textarea>
                </div>
                <button type="submit">Submit</button>
                <a  href="/college-signup">Sign up as College</a>

            </form>
        </div>
        

        <script>
            document.getElementById("userForm").addEventListener("submit", function (e) {
                e.preventDefault();
                const formData = new FormData(this);

                // You can now access the form data using formData.get("fieldName")
                // Example: const name = formData.get("name");

                // For demonstration purposes, you can log the form data to the console
                for (var pair of formData.entries()) {
                    console.log(pair[0] + ": " + pair[1]);
                }
            });
        </script>

   


</div>

<script src="{{asset('home/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('home/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('home/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('home/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('home/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('home/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('home/plugins/easing/easing.js')}}"></script>
<script src="{{asset('home/js/custom.js')}}"></script>

</body>
</html>