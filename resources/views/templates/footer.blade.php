<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>



<script>
    function isNumericKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 &&
            (charCode < 48 || charCode > 57))
            return true;
        return false;
    }

    function Disable_Control_C() {
        var keystroke = String.fromCharCode(event.keyCode).toLowerCase();

        if (event.ctrlKey && (keystroke == 'c' || keystroke == 'v')) {

            event.returnValue = false;
        }
    }



   /*  function objetoAjax() {
        var xmlhttp = false;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                xmlhttp = false;
            }
        }

        if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
            xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
    }


    function consultaMarcaProducto() {
        var ajax2 = objetoAjax();
        ajax2.open("POST", "./coso.php", true);

        ajax2.onreadystatechange = function() {
            if (ajax2.readyState == 4) {
                if (ajax2.status == 0) {
                    return;
                }

                var mensaje = (ajax2.responseText)
                console.log (mensaje);
            }
        }
        ajax2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax2.send("");
    }
     */
</script>





</body>

</html>
