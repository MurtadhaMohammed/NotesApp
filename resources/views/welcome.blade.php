<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      
        <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <!--<link href="css/app.css" rel="stylesheet" type="text/css">-->
           <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}" >
       
    </head>
    <body>
       <div class="container-fluid">
   <nav class="row list-group-item page-title-list" style="background-color: #2196F3;color: white">
   <div class="col-xs-12" style="color: white;font-size:18px;">
    All Pages
   </div>
   
   </nav>
      <div class="row list-group-item" >
      <form method="POST"  id="form" style="margin: 3%;" >
        {{ csrf_field() }}
        <input class="form-control" type="text" name="fname" placeholder="First name..."><br>
        <input class="form-control" type="text" name="lname" placeholder="Last name..."><br>
        <button id="id" type="submit" class="btn btn-default pull-right">Add New Name</button>
      </form>
      </div>
      <div class="c2">
             

      </div>
   
    </div>
    
    <script src="js/jquery-3.2.1.js"></script>
     <!--<script src="{{ asset('js/jquery-3.2.1.js') }}"/>-->
  
    <script type="text/javascript">

       $( document ).ready( function(e) {
     
          
        /* $.ajax({
                    type: "GET",
                    url: "all",
                    dataType: "html",
                    success : function(data) 
                    {
                    $('.c2').text(data);
                    //return step1j;
                    }
               });*/
        $('.c2').load('all');
           /* $(this).load("all", function(data, statusTxt, xhr){
            if(statusTxt == "success")
            $('.c2').text(data);
            if(statusTxt == "error")
            alert("Error: " + xhr.status + ": " + xhr.statusText);
         });*/
        
        $('#form').on('submit', function(e) {
        e.preventDefault();
        

       // var fname = $(this).find('input[name=fname]').val();
        //var lname = $(this).find('input[name=lname]').val();
        //
       /* var data=new FormData();
        data.append('fname',fname);
        data.append('lname',lname);*/
       //alert($(this).serialize());
        //var data="fname="+fname+"&lname="+lname;
           $.ajax({
              url:'store',
              type: 'POST',
              data:$(this).serialize(),
              //contentType:"multipart/form-data"
              success: function(msg) {
              $('.c2').load('all');
               }
            });
           
          });
          
        });
    </script>
   
    </body>
</html>
