<html>

<body>
<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php

    for ($i = 1; $i <= 8; $i++) {
        echo ('<tr>');
        for ($o = 1; $o <= 8; $o++) {
            $total = $i + $o;
            if ($total%2==0) {
                echo ('<td height=50px width=80px bgcolor=#FFFFFF></td>');
            } else {
                echo ('<td height=50px width=80px bgcolor=#000000></td>');
            }
        }

        echo ('</tr>');
    }


    ?>
</table>
</body>

</html>
