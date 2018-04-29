# jianli
<!DOCTYPE html >
<html>
<head>
  <title>个人简历</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.bootcss.com/foundation/5.5.3/css/foundation.min.css">
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/foundation/5.5.3/js/foundation.min.js"></script>
  <script src="https://cdn.bootcss.com/foundation/5.5.3/js/vendor/modernizr.js"></script>
  <style>
  h1{
    text-align: center;
    }
  th{
    font-size:20px;
    background-color:#b0c4de;
    }
    </style>
  </head>
  <body>

    <!-- $resume=array -->
      <!-- (
        "education"=>"",
        "name"=>"",
        "gender"=>"",
        "mizuoku"=>"汉",
        "birthday"=>"1987.12.4",
        "country"=>"中国",
        "height"=>"175",
        "address"=>"东京都北区丰岛1-21-6",
        "phone"=>"0120333553",
        "mobil"=>"09060016822",
        "explain"=>"genndfdf",
        "qualifications"=>array
            (
          "日语一级"
            ),
        "work_history"=>array
            (
            "time"=>"2013.4~2018.3",
            "company"=>"リアルテイスト株式会社"
            )
        );
      ?> -->
        <h1>个人简历</h1>
      <table border="1" align=center>
        <tr>
          <th>
            <a href="#">学校</a>
          </th>
          <td colspan="5">
            <a href="#"><?php echo $_POST["school"];?> </a>
           </td>
          <td colspan="2" rowspan="4">
            <img  src="IMG_20180327_122354.jpg"
            width="150"  height="250"></td>
          </tr>

          <tr>
            <th bgcolor ="#b0c4de"><a href="#">专 业</a>
            </th>
            <td colspan="5"><?php echo $_POST["major"];?> </td>
        </tr>

        <tr >
          <th ><a href="#">姓 名</a></th>
            <td ><?php echo $_POST['name'] ;?>  </td>
            <th ><a href="#">性别</a></th>
            <td ><?php echo $_POST['gender'] ;?> </td>
            <th ><a href="#">民族</a></th>
            <td><?php echo $_POST['mizuoku'] ; ?></td>
        </tr>
        <tr height="50">
            <th><a href="#">出生年月</a></th>
            <td><?php echo $_POST['birthday'] ; ?></td>
            <th > <a href="#">出生地</a></th>
            <td><?php echo $_POST['country'] ; ?></td>
            <th ><a href="#">身高</a></th>
            <td ><?php echo $_POST['height'] ?></td>
        </tr>
        <tr >
            <th><a href="#">最终学历</a></th>
            <td colspan="7"><?php echo $_POST['education'] ;?> </td>
        </tr>
        <tr>
            <th ><a href="#">兴趣爱好</a></th>
            <td colspan="7">
              <?php echo $_POST["interest"];?>
            </td>
        </tr>
        <tr >
            <th ><a href="#">地址</a></th>
            <td colspan="7"><?php echo $_POST['address'] ;?></td>
        </tr>
        <tr >
           <th ><a href="#">资格</a></th>
           <td colspan="3"><?php echo $_POST['qualifications'];?></td>
           <th ><a href="#">联系电话</a></th>
         <td ><?php echo $_POST['phone'] ;?></td>
           <th><a href="#">手机</a></th>
           <td ><?php echo $_POST['mobil'] ;?></td>
       </tr>
        <tr >
            <th ><a href="#">个人说明</a></th>
            <td colspan="7"><?php echo $_POST['explain'] ;?></td>
        </tr>
        <tr>
            <th colspan="8"><a href="#">任职情况</a></th>
              <?php
                $work_history = $_POST["work_history"];
              foreach (  $work_history as  $i => $value) {

                echo "<tr><th>".($i+1)."</th><td colspan='7'>".$value."</td></tr>" ;
              
                ?>
            </tr>

    </table>
</div>

</body>

</html>
