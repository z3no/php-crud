<?php
declare(strict_types=1);
$page_title = "Dragon Ball Z school of schools";
require 'View/includes/header.php';
?>

    <section class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="./images/students.jpeg" class="card-img-top" alt="students image">
            <div class="card-body">
                <h5 class="card-title">Checkout our students</h5>
                <p class="card-text">Our students are like our children, they are all equal and eager to learn.</p>
                <a href="index.php?page=student" class="btn btn-primary stretched-link">Go to students</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./images/masterRoshi.jpg" class="card-img-top" alt="teacher image">
            <div class="card-body">
                <h5 class="card-title">Our wise teachers</h5>
                <p class="card-text">These teachers have all the knowledge, wisdom and skills you'll need.</p>
                <a href="index.php?page=teacher" class="btn btn-primary stretched-link">Go to teachers</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./images/dragonTeam.jpeg" class="card-img-top" alt="group image">
            <div class="card-body">
                <h5 class="card-title">See our groups</h5>
                <p class="card-text">Take a look at our awesome groups you could end up in and where their locations are.</p>
                <a href="index.php?page=group" class="btn btn-primary stretched-link">Go to groups</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./images/kamiSamaTemple.png" class="card-img-top" alt="campus image">
            <div class="card-body">
                <h5 class="card-title">Take a look at our campuses</h5>
                <p class="card-text">Find out which campuses we have and where they are located. Click the button for more details.</p>
                <a href="index.php?page=campus" class="btn btn-primary stretched-link">Go to campuses</a>
            </div>
        </div>

    </section>

<?php
require 'View/includes/footer.php';
?>