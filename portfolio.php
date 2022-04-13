<!DOCTYPE html>
<html>
    <center>  
<head>  
    <title>
    Portfolio 
</title>
<style>
body {
    background-image: url("https://camo.githubusercontent.com/8bf6f6d78abc81fcf9c49f10649423e73ea44bc248e83aaae8759d401c829a84/68747470733a2f2f70687973696373677572756b756c2e66696c65732e776f726470726573732e636f6d2f323031392f30322f6368617261637465722d312e676966");
    background-color: grey;
}  
</style>
</head> 

<body>
<h1> Apoorva Patil </h1>
<h2> Student <h2>
    <p>
        <a href = "www.linkedin.com/in/theapoorvapatil"> Visit My Linkedin!</a>
    </p>
 <center>
     <img src = "girl.jpg" alt="Coder" width="125" height="125">
 </center>

 <?php 
 $expertise = "cloud";
 
 switch($expertise){
     case "database";
     echo"<p> <font color=blue>My Expertise is in Database.</font> </p>";
     break;
     case "cloud";
     echo"<p> <font color=blue>My Expertise is in Cloud.</font> </p>";
     break;
     case "linux";
     echo"<p> <font color=blue>My Expertise is in linux.</font> </p>";
     break;
     case "networking";
     echo"<p> <font color=blue>My Expertise is in networking.</font> </p>";
     break;
     default:
     echo "My expertise is in neither database, linux nor networking";
 }
?>
</body>  
</center>
</html>