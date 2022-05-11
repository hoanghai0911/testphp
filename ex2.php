<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> form dang nhap</title>
    <style>
        .thesame{
            display:flex;
        }
        .size{
            min-width: 120px;
        }
        .size-input{
            flex:1;
        }
        .container{
            max-width:500px;
            margin:200px auto;
        }
        .button{
            margin:10px 225px;
            background-color: var(--color) ;
            border:10px;
            border-style:solid;
            border-color: var(--color);
            border-radius: 50%;

        }
        .spam{
            margin:0px 23px;

        }
        :root{
            --color:rgb(10, 196, 25);
        }
    </style>
</head>
<body>
    
    <?php require_once 'ex.php' ?>
    <?php 
        if (isset($_POST['add'])){
            $Tendangnhap= $_POST['Tendangnhap'];
            $pass=$_POST['pass'];
        
            if($conn -> query("INSERT INTO formdangnhap (Tendangnhap,pass) VALUES(N'$Tendangnhap',N'$pass')")){
                echo "<script>alert('Add Success');</script>";
            }else{
                echo "<script>alert('Add Fail');</script>";
            }
        }
        $conn -> close();
    ?>
    <form method="POST" action="">
        <div class="container">
            <div class="email thesame">
                <label class="size"> Tên đăng nhập</label>
                <input name="Tendangnhap" class="size-input" type="text">
            </div>
            <div class="pass thesame">
                <label class="size"> Password</label>
                <input name="pass" class="size-input" type="text">
            </div>
            <div>
                <button name="add" class="button">
                    <spam class="spam">submit</spam>
                </button>
            </div>
        </div>
    </form>
</body>

</html>