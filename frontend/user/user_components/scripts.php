
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


      

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>

    <script>
         document.querySelector(
                    "#loader").style.visibility = "hidden";
                    
        function showloader() {

            document.querySelector(
                "body").style.visibility = "hidden";
            document.querySelector(
                "#loader").style.visibility = "visible";

            return true;
        }
    </script>

<script>
    function filterText()
        {  
            var rex = new RegExp($('#filterText').val());
            if(rex =="/all/"){
                clearFilter()
            }
            else{
                $('.content').hide();
                $('.content').filter(function() {
                return rex.test($(this).text());
                }).show();
            }
        }
        
    function clearFilter()
        {
            $('.filterText').val('');
            $('.content').show();
        }
</script>