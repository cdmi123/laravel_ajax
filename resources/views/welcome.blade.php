<table>
    <tr>
        <td><input type="button" value="increment" id="inc"></td>
        <td><label id="txt">0</label></td>
        <td><input type="button" value="decrement" id="dec"></td>
    </tr>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#inc').click(function(){
                var val = $(this).val();
                var val1 = $('#txt').text();

            $.ajax({
                type:"post",
                url:"/ajax",
                data:{"_token":"{{csrf_token()}}","val":val,"val1":val1},
                success:function(res){
                    $('#txt').text(res);
                }
            })
        })

        $('#dec').click(function(){
                var val = $(this).val();
                var val1 = $('#txt').text();

            $.ajax({
                type:"post",
                url:"/ajax",
                data:{"_token":"{{csrf_token()}}","dec":val,"val1":val1},
                success:function(res){
                    $('#txt').text(res);
                }
            })
        })
    })
</script>