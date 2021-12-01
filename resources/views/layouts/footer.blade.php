
<script src="{{URL::asset('js/jquery.min.js')}}"> </script>
<script src="{{URL::asset('js/gsap.min.js')}}"> </script>
<script>
    $("#menu-btn_open").click(function() {
        $("#mobile_menu").css("display", "flex")
    })
    $("#menu-btn_close").click(function() {
        $("#mobile_menu").css("display", "none")
    })


    $("#doc_menu_open").click(function() {
        $("#doc_menu").css("display", "flex")
    })
    $("#doc_menu_close").click(function() {
        $("#doc_menu").css("display", "none")
    })


</script>

</body>

</html>
