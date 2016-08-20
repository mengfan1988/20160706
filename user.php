<?php


$link=new PDO('mysql:dbname=pdo;host=127.0.0.1;charset=utf8','root','');
$sth=$link->query('select * from users');
$res=$sth->fetchAll(2);
?>
<script src="jquery-3.0.0.min.js" type="text/javascript"></script>
<table border="1" rules="all" name="tb">
    <tr>
        <td>年龄</td>
        <td>姓名</td>
        <td>操作</td>
    </tr>
    <?php foreach($res as $v){ ?>
    <tr>
        <td><?php echo $v['uname'] ?></td>
        <td><?php echo $v['age'] ?></td>
        <td></td>
    </tr>
    <?php } ?>
</table>
<hr>
姓名：<input type="text" name="sname"><br><br>
年龄：<input type="text" name="age"><br><br>
<input type="submit" value="添加">
<script>
    
    
    $("[type=submit]").click(function(){
        var data={
        sname:$("[name=sname]").val(),
        age:$("[name=age]").val()
    };
    
        $.get('./add.php',data,function(res){
     confirm(res);
     var tr="<tr><td>"+data.sname+'</td><td>'+data.age+'</td><td></td></tr>';
     $('[name=tb]').append(tr);
     
 });
    });
 
</script>