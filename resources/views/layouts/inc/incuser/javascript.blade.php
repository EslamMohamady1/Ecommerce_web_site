<script src="{{ asset('assets/js/jquery.js')}}"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
		
		<!-- bootsnav js -->
		<script src="{{ asset('assets/js/bootsnav.js')}}"></script>

		<!--owl.carousel.js-->
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('jquery.min.js')}}"></script>
        <script src="{{ asset('owlcarousel/owl.carousel.min.js')}}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		
        
        <!--Custom JS-->
        <script src="{{('assets/js/custom.js')}}"></script>
<script>
    $('#plus').click(function add() {
    var $qtde = $("#quantity");
    var a = $qtde.val();
    
    a++;
    $("#minus").attr("disabled", !a);
    $qtde.val(a);
});
$("#minus").attr("disabled", !$("#quantity").val());

$('#minus').click(function minust() {
    var $qtde = $("#quantity");
    var b = $qtde.val();
    if (b >= 1) {
        b--;
        $qtde.val(b);
    }
    else {
        $("#minus").attr("disabled", true);
    }
});

/* On change */
$(document).ready(function()
{
    function updatePrice()
    {
        var price = parseFloat($("#quantity").val());
        var total = (price + 1) * 1.05;
        var total = total.toFixed(2);
        $("#total-price").val(total);
    }
    $(document).on("change, keyup, focus", "#quantity", updatePrice);
});
</script>