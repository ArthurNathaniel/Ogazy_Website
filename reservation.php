<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book your car rental with Ogazy G. Car Rental - Conveniently located at Kumasi Airport Roundabout, opposite the DVLA Office. Reserve your vehicle online and enjoy hassle-free travel.">
    <meta name="keywords" content="car reservation, book car, car rental, Ogazy G. Car Rental, Kumasi Airport, DVLA Office">
    <meta name="author" content="Ogazy G. Car Rental">
    <title>Car Reservation - Ogazy G. Car Rental</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="hero_all">
            <div class="swiper mySwiper">
                <div class="hero_texts">
                    <h3> OGAZY G CAR RENTAL</h3>
                    <br>
                    <h1>Reservation</h1>


                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide hero_slides">
                        <img src="./images/hero.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="reservation_all">
            <div class="reservation">
                <div class="forms">
                    <h1>Make a Reservation</h1>
                </div>
                <form id="reservationForm">
                    <div class="forms">
                        <label>Name:</label>
                        <input type="text" placeholder="Enter your name" name="name" required>
                    </div>
                    <div class="forms">
                        <label>Date:</label>
                        <input type="date" placeholder="Pick a date" name="date" required>
                    </div>
                    <div class="forms">
                        <label>Number of Days</label>
                        <input type="number" min="0" placeholder="Enter your number of days" name="days" required>
                    </div>
                    <div class="forms">
                        <label>Email Address:</label>
                        <input type="email" placeholder="Enter your email address" name="email" required>
                    </div>
                    <div class="forms">
                        <label>Phone Number: </label>
                        <input type="number" min="0" placeholder="Enter your phone number" name="number" required>
                    </div>
                    <div class="forms">
                        <label>Note:</label>
                        <textarea name="note" placeholder="Please add any additional information" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="forms">
                        <button type="submit" id="submitButton">Make a Reservation</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>
    <script src="./js/swiper.js"></script>
    <script>
        (function() {
            emailjs.init("Q9HLFNCR51qgmfLmK"); // Replace YOUR_USER_ID with your actual EmailJS user ID
        })();
        document.getElementById('reservationForm').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('submitButton').innerText = 'Please wait...';
            emailjs.sendForm('service_v0ptnqj', 'template_g6wm23g', this)
                .then(function(response) {
                    console.log('Success!', response.status, response.text);
                    alert('Reservation successful! We will get back to you soon.');
                    document.getElementById('submitButton').innerText = 'Make a Reservation';
                }, function(error) {
                    console.log('Failed...', error);
                    alert('Oops! Something went wrong. Please try again later.');
                    document.getElementById('submitButton').innerText = 'Make a Reservation';
                });
        });
    </script>
</body>

</html>