<!DOCTYPE html>
<html lang="en">
<head>
<title>College-SignUp Form</title>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

<div class="super_container">

    <x-navbar/>

    <div class="container form-container" style="margin-top: 200px">
   
        <h2 class="text-center">College Form</h2>
        <form id="Collegeform" method="POST" action="{{ route('college.store') }}" enctype="multipart/form-data">
        @csrf    
        <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="college_id"  name="name" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="tel" class="form-control" name="phone" placeholder="Enter Address" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="contact" class="form-control" name="contact" placeholder="Enter Contact" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="logo">Logo:</label>
                <input type="file" class="form-control-file" name="logo">
            </div>
            <div class="form-group gallery-container">
                <label for="gallery">Gallery:</label>
                <input type="file" class="form-control-file gallery-input" name="gallery[]">
                
            </div>
            <button type="button" class="add-gallery">Add More</button>
            <br/>
            <button type="submit">Submit</button>
        </form>
    </div>
	<script>
    $(document).ready(function() {
        // Clone the gallery input field when the "Add More" button is clicked
        $('.add-gallery').click(function() {
            var clone = $('.gallery-input:first').clone();
            clone.val('');
            $('.gallery-container').append(clone);
        });
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