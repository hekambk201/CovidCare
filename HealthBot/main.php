
<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <title> HealthBot</title>

</head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.health_style {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.corona {
  border-color: #ccc;
  background-color: #ddd;
}

.health_style::after {
  content: "";
  clear: both;
  display: table;
}

.health_style img {
  float: left;
  max-width: 50px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.health_style img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}


.square {
  height: auto;
  width: 810px;
  padding: 8px;
  background-color: #fff;
  border: 2px solid #dedede;
  
}
div.click {
  position: -webkit-sticky;
  position: sticky;
  bottom: 0;
  margin-top: 200px;
  background-color: #ddd;
  padding: 10px 0 0 10px;
  font-size: 20px;
}

    </style>
    <body>

        <span id="ref">
            <div class="square">
            <center><h2> COVID CARE HEALTH TIPS BOT </h2></center>
            </div>
            <br/>
            <?php 
    $query="select * from chats ORDER by date DESC";
    $res=mysqli_query($con,$query);
    while($data=mysqli_fetch_array($res)){
      $user=$data['user'];
      $healthbot=$data['healthbot'];
      $date=$data['date'];
      
  ?>


    <div class="health_style" style="margin-right: 400px;">
    <img src="https://image.flaticon.com/icons/svg/3090/3090660.svg" alt="Avatar" style="width:100%;">
    <p id="message"><?php echo $user;?></p>
    <span class="time-right"><?php echo $date;?></span>
   </div>

   <div class="health_style corona" style="margin-left: 400px;">
    <img src="https://www.flaticon.com/premium-icon/icons/svg/2981/2981554.svg" alt="Avatar" class="right" style="width:100%;">
    <p id ="message"><?php echo $healthbot;?></p>
    <span class="time-left"><?php echo $date;?></span>
  </div>
  <?php } ?>
  <div class="click">
    <div class="row">
       <div class="col-md-12">
         <div class="input-group mb-3">
            <input type="text" class="form-control" id="msg">
              <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" onclick="send()">Send</button>
              </div>
          </div>
     </div>
    </div>
  </div>
  </div>
  </span>
  <br/>
  <script type="text/javascript">
  function send(){
    var text=$('#msg').val().toLowerCase();
    
     $.ajax({
                type:"post",
                url:"search.php",
                data:{text:text},
                success:function(data){
                    //alert(data);
                    $('#ref').load(' #ref');
                }
      });
  }
</script>
    </body>
</html>