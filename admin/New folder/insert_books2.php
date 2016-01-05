<?php
$value=$_GET['number'];
echo'
<html>
<head>
<script type="text/javascript" src="admin_js.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>


</head> 
<body>';

        
       echo' <form name="abc">
        <table style="width:85%" border="1">
        <tr align="center">
            <th>id</th>
            <th>name</th>
            <th>author</th>
            <th>publication</th>
            <th>edition</th>
            <th>action</th>
        </tr>';
       for($i=0;$i<$value;$i++)
       { 
       echo'<tr align="center">
            <th><input type="text" name="id" id="id_'.$i.'"></th>
            <th><input type="text" name="name" id="name_'.$i.'"></th>
            <th><input type="text" name="author" id="author_'.$i.'"></th>
            <th><input type="text" name="publication" id="publication_'.$i.'"></th>
            <th><input type="text" name="edition" id="edition_'.$i.'"></th>
            <th id="a"><input type="button" value="insert" id="insert_'.$i.'" onclick="books('.$i.')"></th>
        </tr>';
        }
        echo'</table>
            
    
    </form>
</body>
</html>';
       ?>