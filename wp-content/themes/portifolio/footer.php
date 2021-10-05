<?php wp_footer()?>

<script>
    let target = $(".section-skills").offset().top;
    let isAnamationStart = false;
    $(window).scroll(function(){
    if (isAnamationStart == false && $(window).scrollTop() >= target) {
        $(function(){
        $('.circlechart').circlechart();
        isAnamationStart = true;
    });
    }
});



</script>
</body>
</html>