<html>
<?php
header("Content-Type: text/html;charset=utf-8");
@ $conn=new mysqli('localhost','root','9677','jinghongtest');
if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database.  Please try again later.";
    exit;
}
$id=$_POST['id'];
$name=$_POST['name'];
mysqli_query($conn,"set names 'utf8'");
$query = "select * from jinghongmember WHERE id ='$id' OR name ='$name'";
$result = $conn->query($query);
if($result->num_rows > 0)
{
    $row = mysqli_fetch_array($result);
    if($row['name'] == $name && $id == '' )
    {
        echo '姓名：' . $row['name'];
        echo '</br>学号：' . $row['id'];
        echo '</br>专业：' . $row['major'];
        echo '</br>学院：' . $row['academy'];
        echo '</br>班级：' . $row['class'];
        echo '</br>长号：' . $row['phone1'];
        echo '</br>短号：' . $row['phone2'];
        echo '</br>Git名字：' . $row['github_name'];
        echo '</br>QQ：' . $row['qq'];
        echo '</br>E-mail：' . $row['mail'];
        exit;
    }
    elseif ($name== "" && $row['id'] == $id)
    {
        echo '姓名：' . $row['name'];
        echo '</br>学号：' . $row['id'];
        echo '</br>专业：' . $row['major'];
        echo '</br>学院：' . $row['academy'];
        echo '</br>班级：' . $row['class'];
        echo '</br>长号：' . $row['phone1'];
        echo '</br>短号：' . $row['phone2'];
        echo '</br>Git名字：' . $row['github_name'];
        echo '</br>QQ：' . $row['qq'];
        echo '</br>E-mail：' . $row['mail'];
        exit;
    }
    elseif($row['name'] == $name && $row['id'] == $id)
    {
        echo '姓名：' . $row['name'];
        echo '</br>学号：' . $row['id'];
        echo '</br>专业：' . $row['major'];
        echo '</br>学院：' . $row['academy'];
        echo '</br>班级：' . $row['class'];
        echo '</br>长号：' . $row['phone1'];
        echo '</br>短号：' . $row['phone2'];
        echo '</br>Git名字：' . $row['github_name'];
        echo '</br>QQ：' . $row['qq'];
        echo '</br>E-mail：' . $row['mail'];
        exit;
    }
    else
    {
        echo "姓名与学号不匹配，请重新输入";
        exit;
    }
}
else
{
    echo "姓名或学号输入错误，请重新输入";
}




/**
 * Created by PhpStorm.
 * User: 20170
 * Date: 2017/10/8
 * Time: 13:43
 */
?>
</html>
