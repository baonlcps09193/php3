<meta charset="utf-8">

<style>

a {text-decoration: none; color:deeppink} a:hover {font-weight: bold;}

#data {min-height:100px;width:400px;background-color:darkkhaki;

border:double 1px darkkhaki;padding:10px}

#data a { color:green}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<div class="tab">

<div class="label">

<a href="#">Tin xem nhiều</a> &nbsp;

<a href="#">Tin nổi bật</a>

</div>

<div id="data"></div><input id="tt">

</div>

<script>
    $(document).ready(function() {
        let baseUrl = "http://localhost";
        $('.label a:eq(0)').click(function() {
            $('#data').load(`${baseUrl}:8000/txn`);
            return false;
        });
        $('.label a:eq(1)').click(function() {
            $('#data').load(`${baseUrl}:8000/tnb`);
            return false;
        });
    })
</script>