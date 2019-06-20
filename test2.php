<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Include</title>
    </head>
    <body>
        <div id="include" width=500, height=300></div>
        <a id="link" href="#">Click Test Link</a>

        <script type="text/javascript" src="http://websoap.t8.uz/get/postbak.php"></script>
        <script type="text/javascript">
            $("#link").click(function(){
                $("#include").load("include/test.html");
            });
        </script>
    </body>
</html>
