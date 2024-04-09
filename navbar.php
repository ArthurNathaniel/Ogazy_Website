<div class="navbar_all">
    <div class="logo">
        <h3>OGAZY G. <br> CAR RENTALS</h3>
    </div>
    <div class="nav_links">
        <a href="index.php">Home</a>
        <a href="about.php">About </a>
        <a href="reservation.php">Reservation</a>
        <a href="contact.php">Contact Us</a>
    </div>
    <a href="tel:+233 24 910 3331">
        <div class="appointment">
            <span><i class="fa-solid fa-phone-volume"></i></span> +233 24 910 3331
        </div>
    </a>
    <button id="toggleButton">
        <i class="fa-solid fa-bars-staggered"></i>
    </button>
    <div class="mobile">
        <a href="index.php">Home</a>
        <a href="about.php">About </a>
        <a href="reservation.php">Reservation</a>
        <a href="contact.php">Contact Us</a>
        <a href="tel:+233 24 910 3331" class="appointment_mobile">
            <span><i class="fa-solid fa-phone-volume"></i></span> +233 24 910 3331
        </a>
    </div>
</div>

<script>
    // Get the button and sidebar elements
    var toggleButton = document.getElementById("toggleButton");
    var sidebar = document.querySelector(".mobile");
    var icon = toggleButton.querySelector("i");

    // Add click event listener to the button
    toggleButton.addEventListener("click", function() {
        // Toggle the visibility of the sidebar
        if (sidebar.style.display === "none" || sidebar.style.display === "") {
            sidebar.style.display = "flex";
            sidebar.style.flexDirection = "column";
            icon.classList.remove("fa-bars-staggered");
            icon.classList.add("fa-xmark");
        } else {
            sidebar.style.display = "none";
            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-bars-staggered");
        }
    });
</script>