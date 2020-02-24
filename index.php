<?php
    $pagetitle = "Women In Animation";
    include('inc/header.php');
?>
<script>
    $("header nav ul li a[href=home]").addClass('active');
</script>
<main id="home">
    <section id="landing">
        <div class="container flex" style="align-items: center; width: 100%;">
            <div id="title" style="flex: 1.5; display: flex; flex-direction: column;">
                <h1 style="font-size: 52px; line-height: 1em; font-weight: 200;">Women In <br> Animation.</h1>
                <p style="padding: 25px 0px; font-family: 'Poppins', sans-serif; font-weight: 200;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam magni praesentium maiores eos quo quam est. Officia exercitationem consequatur minima ullam sint alias asperiores enim, deleniti, ea aut facilis quam.</p>
                <a href="#" style="background-color: red; padding: 10px 20px; text-decoration: none; font-family: 'Poppins', sans-serif; color: #fff; text-align: center; margin-top: 25px;" id="openVideo">WATCH VIDEO</a>
            </div>
            <!-- snow white -->
            <div id="wrapper" style="display: flex; flex: 2; justify-content: flex-end;">
                <div id="scene">
                    <div id="background"></div>
                    <img data-depth="-0.6" src="assets/img/foreground-03-01.png" alt="">
                    <img data-depth="-0.4" src="assets/img/foreground-04-01.png" alt="">
                    <img data-depth="0" src="assets/img/foreground-01.png" alt="" id="snowwhite">
                    <img src="assets/img/foreground.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="info">
        <div class="container flex" style="flex-direction: column;">
            <section id="disney">
                <img src="assets/img/disney-mickey.png" alt="" style="width: 80%; max-width: 400px;">
                <div class="content">
                    <h1 style="padding: 25px 0px;">Disney</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sed impedit soluta rerum facere, expedita explicabo, suscipit ducimus aut quia velit tempore quo adipisci eligendi placeat nostrum reiciendis voluptates. Doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repudiandae, dicta quam cupiditate magnam incidunt eum enim quibusdam id unde aliquam ducimus reprehenderit at veritatis delectus asperiores ea culpa laborum.</p>
                    <div style="display: flex; margin-top: 50px;">
                        <a href="disney"  style="background-color: red; padding: 10px 20px; text-decoration: none; font-family: 'Poppins', sans-serif; color: #fff; text-align: center; text-transform: uppercase;">Learn More about Disney</a>
                    </div>
                </div>
            </section>
            <section id="archetypes">
                <img src="assets/img/disney-mickey.png" alt="" style="width: 80%; max-width: 400px;">
                <div class="content">
                    <h1 style="padding: 25px 0px;">Archetypes</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sed impedit soluta rerum facere, expedita explicabo, suscipit ducimus aut quia velit tempore quo adipisci eligendi placeat nostrum reiciendis voluptates. Doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repudiandae, dicta quam cupiditate magnam incidunt eum enim quibusdam id unde aliquam ducimus reprehenderit at veritatis delectus asperiores ea culpa laborum.</p>
                    <div style="display: flex; margin-top: 50px;">
                        <a href="archetypes"  style="background-color: red; padding: 10px 20px; text-decoration: none; font-family: 'Poppins', sans-serif; color: #fff; text-align: center; text-transform: uppercase;">Learn More about Archetypes</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <div id="modal">
        <div id="iframe">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/SBeYzoQPbu8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</main>
<?php
    include('inc/footer.php');
?>