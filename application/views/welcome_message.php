<?php
	defined('BASEPATH') OR exit("No direct script access allowed");
?>
<html>
    <head>
        <meta charset="UTF-8">

        <title>
            
        </title>
         <link rel="stylesheet" href="<?echo base_url()?>application/css/bootstrap.min.css">
		 <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="<?echo base_url()?>application/css/futureStyle.css"/>
        <script src="<?echo base_url()?>application/js/jquery.js" type="text/javascript" ></script>
      
		<script src="<?echo base_url()?>application/js/myCmnt.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container main">
            <header>
             <div class="row" style="margin-left: 32px !important;">
                 <div class="headerLeft col-8 ">
                     <li class="unorderList" style="font-size: 10px; font-family: sans-serif; font-weight: bold;">Телефон (499)340-94-71</li>
                     <li class="unorderList" style="font-size: 10px; font-family: sans-serif; font-weight: bold;">Email: info@future-group.ru</li>
                     <li class="unorderList comment" style="font-size: 25px; font-family: 'Open Sans Condensed', sans-serif;">Комментарии</li>
                 </div>
                 <div class="headerLeft col-3 ustify-content-end">
                     <li class="headerLeft logo"><img src="<?echo base_url()?>application/img/future_test.png" alt="логотип" style="height: 40px;width: 50px;" ></li>
             
                 </div>
             </div>
                     
            </header>
            <div class=mydashed>
            </div>
            <div class="container Jumbotron">
                <div class="templateComment">
                    <div class="sentComment">
                        
                    </div>
                    <hr>
                    <div class="sendComment">
                        <form method="post" action="" class="myData">
                            <label style="font-weight: bold">Оставить комментарий</label>
                            <div class="form-group">
                                <label for="Name">Ваше Имя</label>
                                <input type="text" name="Name" class="form-control Name" style="background: #e9ecef;">
                            </div>
                            <div class="form-group myComment">
                                <label for="yourComment">Ваш комментарий</label>
                                <textarea class="form-control myTestComment" name="myComment" style="border: 2px solid black; background: #e9ecef; border-radius: 3px 3px;"></textarea>
                            </div>
                            <input type="button" value="Отправить" class="mr-auto" style="border: 2px solid black; background: #e9ecef; border-radius: 3px 3px">
                        </form>
                        
                    </div>
                </div>
            </div>
             
               <footer>
                
                 <div class="row" style="margin-left: 32px !important;">
					<div class="footerLeft col-2">
                     <li class="footerLeft logo"><img src="<?echo base_url()?>application/img/future_test.png" alt="логотип" style="height: 40px;width: 50px;" ></li>
             
                 </div>
                     <div class="footerLeft col-8">
                     <li class="unorderList" style="font-size: 10px; font-family: sans-serif; font-weight: bold;">Телефон (499)340-94-71</li>
                     <li class="unorderList" style="font-size: 10px; font-family: sans-serif; font-weight: bold;">Email: info@future-group.ru</li>
                     <li class="unorderList comment" style="font-size: 25px; font-family: 'Open Sans Condensed', sans-serif;">Комментарии</li>
                 </div>
                 
                 </div>
               </footer>
        </div>
        <script>
   /*
    //alert("ok");
});*/
        </script>
    </body>
</html>