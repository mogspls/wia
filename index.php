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
                <a href="#" style="background-color: red; padding: 10px 20px; text-decoration: none; font-family: 'Poppins', sans-serif; color: #fff; text-align: center; margin-top: 25px;">LEARN MORE</a>
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
        
    </section>
</main>
<?php
    include('inc/footer.php');
?>