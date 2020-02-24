<footer>
    <p>Copyright &copy; <?php echo date('Y'); ?> | For Educational Purposes Only</p>
</footer>
<script>
    $(document).ready(function(){
        $('.carousel').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            prevArrow: "<button class='slick-btn slick-left'>&lt;</button>",
            nextArrow: "<button class='slick-btn slick-right'>&gt;</button>"
        });
    })
</script>
</body>
</html>