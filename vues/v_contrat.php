<div>  
 <h2>Tableau de contrat </h2>
   <a href='index.php?uc=contrat&action=ajoutC'><img src="image/plus.jpg" width="50px" height="50px"></a>
   <body>
       <label><strong>Recherche</strong></label>
       <input type="text" name="category" class='rechercher' id="categoryFilter"><br><br>
        <?php 
print(tableauContrat($contrat->getlistecontrat()));
?>   
   </body> 

