

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function(){
           var color = ["#1abc9c","#16a085","#e74c3c","#8e44ad","#2c3e50","#f39c12","#f39c12","#d35400","#3498db"];
            
            setInterval(()=>{
                var i = Math.floor(Math.random() * (color.length - 0)) + 0;
                $(".navdwrap").css("background-color", color[i]);  
            }, 3000);
            
            $('.upall').click(function(){
                $('body, html').animate({
                    scrollTop: '0px'
                }, 300);
            });

            $(window).scroll(function(){
                if( $(this).scrollTop() > 0 ){
                    $('.upall').slideDown(300);
                } else {
                    $('.upall').slideUp(300);
                }
            });
            
        });
    </script>

    