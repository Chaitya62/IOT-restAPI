 
<script src="<?php echo base_url(); ?>assets/js/ripples.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>
<script src="https://fezvrasta.github.io/snackbarjs/dist/snackbar.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>


    <script>
    $(function(){


        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 55,
            backDelay: 300,
            loop: 0,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });



        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }



    </script>

</body>
</html>