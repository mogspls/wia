<?php
    $pagetitle = "Disney | Women In Animation";
    include('inc/header.php');
?>
<script>
    $("header nav ul li a[href=disney]").addClass('active');
</script>
<main id="home">
    <section id="landing">
        <div class="container flex" style="align-items: center; width: 100%;">
            <div id="title" style="flex: 1.5; display: flex; flex-direction: column;">
                <h1 style="font-size: 52px; line-height: 1em; font-weight: 200;">Disney.</h1>
                <p style="padding: 25px 0px; font-family: 'Poppins', sans-serif; font-weight: 200;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam magni praesentium maiores eos quo quam est. Officia exercitationem consequatur minima ullam sint alias asperiores enim, deleniti, ea aut facilis quam.</p>
            </div>
            <!-- snow white -->
            <div id="wrapper" style="display: flex; flex: 2; justify-content: flex-end;">
                <img src="assets/img/disney-mickey.png" alt="">
            </div>
        </div>
    </section>
    <section id="info">
        <div class="container flex" style="flex-direction: column;">
            <h1 style="font-size: 38px; font-weight: 400;">The Evolution...</h1>
            <section>
                <h1 style="padding: 25px 0px;">Classic Era</h1>
                <div class="flex" style="align-items: center;">
                    <img src="assets/img/disney-mickey.png" alt="" style="width: 80%; max-width: 400px;">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sed impedit soluta rerum facere, expedita explicabo, suscipit ducimus aut quia velit tempore quo adipisci eligendi placeat nostrum reiciendis voluptates. Doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repudiandae, dicta quam cupiditate magnam incidunt eum enim quibusdam id unde aliquam ducimus reprehenderit at veritatis delectus asperiores ea culpa laborum.</p>
                    </div>
                </div>
            </section>
            
            <section>
                <h1 style="padding: 25px 0px;">Eisner Era</h1>
                <div class="flex" style="align-items: center;">
                    <img src="assets/img/disney-mickey.png" alt="" style="width: 80%; max-width: 400px;">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sed impedit soluta rerum facere, expedita explicabo, suscipit ducimus aut quia velit tempore quo adipisci eligendi placeat nostrum reiciendis voluptates. Doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repudiandae, dicta quam cupiditate magnam incidunt eum enim quibusdam id unde aliquam ducimus reprehenderit at veritatis delectus asperiores ea culpa laborum.</p>
                    </div>
                </div>
            </section>
            
            <section>
                <h1 style="padding: 25px 0px;">Iger Era</h1>
                <div class="flex" style="align-items: center;">
                    <img src="assets/img/disney-mickey.png" alt="" style="width: 80%; max-width: 400px;">
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora sed impedit soluta rerum facere, expedita explicabo, suscipit ducimus aut quia velit tempore quo adipisci eligendi placeat nostrum reiciendis voluptates. Doloribus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, repudiandae, dicta quam cupiditate magnam incidunt eum enim quibusdam id unde aliquam ducimus reprehenderit at veritatis delectus asperiores ea culpa laborum.</p>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>
<?php
    include('inc/footer.php');
?>