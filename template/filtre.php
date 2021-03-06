<html>
   <form action="filtre.php" method="post">
        <input type="text" name="filtre">
      <input name="search" type="submit" value="Search"/>
       
    <?php
   $serveur = "localhost";
   $dbname = "acu";
   $user = "tidal";
   $pass = "tidal";
    

   $query = "SELECT patho.desc FROM patho";

   
try{
   $db = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
   catch(PDOException $e){
       echo "Can't connect to the database";
   }
$sql = "SELECT patho.desc FROM patho";
$query = $db->prepare($sql);
$query->execute();
$results = $query->fetch(PDO::FETCH_ASSOC);
   

   //first pass just gets the column names
   
   

   //return only the first row (we only need field names)
   
    foreach($results as $m)
    {
    ?>
        <option value="<?php echo $m['patho.desc'];?>"></option>
    <?php
    }
?>
</select>

   </form>
   <head>
      <meta charset = "UTF-8">
      <title>test.php</title>
         <style>
            table {
            border-collapse: collapse;
            width: 50%;
            }
            th, td {
            input: "text";
            text-align: left;
            padding: 8px;
            }
            th {
            background-color: SkyBlue;
            }
            tr:nth-child(odd) {background-color: #f2f2f2;}
            tr:hover {background-color: AliceBlue;} 
         </style>
   </head>

<body>

   <p>
   <?php
      $filtre = "";
      if(isset($_POST['filtre'])) {
         $filtre = $_POST['filtre'];
      }

      try {
         $con= new PDO('mysql:host=localhost;dbname=acu', "tidal", "tidal");
         $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         if(!empty($filtre)) {
        $query = 'SELECT S.desc AS symptome, P.desc AS pathologie FROM `keywords` AS KW JOIN keySympt AS KS on KW.idK = KS.idK JOIN symptome AS S on KS.idS = S.idS JOIN symptPatho AS SP on S.idS = SP.idS JOIN patho AS P on SP.idP = P.idP WHERE KW.name LIKE "%'.$filtre.'%" ';
         }
         else {
        $query = "SELECT * FROM symptome";
         }

         //first pass just gets the column names
         print "<table>";
         $result = $con->query($query);

         //return only the first row (we only need field names)
         $row = $result->fetch(PDO::FETCH_ASSOC);
         print " <tr>";
         foreach ($row as $field => $value){
        print " <th>$field</th>";
         }
         // end foreach
         print " </tr>";

         //second query gets the data
         $data = $con->query($query);
         $data->setFetchMode(PDO::FETCH_ASSOC);
         foreach($data as $row){
        print " <tr>";
        foreach ($row as $name=>$value){
           print " <td>$value</td>";
        } //end field loop
        print " </tr>";
         } //end record loop
         print "</table>";
      } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
      } // end try


   ?>
   </p>
</body>

</html>