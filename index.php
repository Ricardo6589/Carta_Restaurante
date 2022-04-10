<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="css/style.css"> 
    <title>Carta</title>
    
</head>
<body>
    <h1>Carta Ricardo's Restaurant</h1>
    <div class="row">
        <div class="column1"></div>
    </div>

    <div class="row">
        <div class="column60"> 
            <div class="column2">
                <?php
                //conexion al xml
                $carta="carta.xml";
                $xml = simplexml_load_file('./xml/carta.xml');
                ?>
                <h2>Bebidas</h2>
                
                <?php
                   echo "<br>";                   
                   foreach ($xml->plato as $plato) {
                        
                       if ($plato['tipo']=='Bebidas') {
                            echo "<span class='nombre'>{$plato->nombre}</span>"; 
                                                    
                            
                           if ($plato->nombre=='Agua'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ----------------------------------------";
                                echo "$plato->precio"; 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";                                
                                echo "<span class='calorias'>{$plato->calorias}</span>";                     
                                
                           }  
                           else if ($plato->nombre=='Coca-Cola'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---------------------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                           }
                           else if ($plato->nombre=='Fanta Limon/Naranja'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -----------------"; 
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                           }
                           else if ($plato->nombre=='Cerveza'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------------";
                                echo ($plato->precio);                                 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                           }
                           else if ($plato->nombre=='Vino'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -----------------------------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                           }                                                     
                                                     
                           echo"<br>"; 
                           echo"<br>";                      
                                                
                        }                       
                            
                       
                       
                    }                   
                    
                ?>
                <h2>Tapas</h2>
                    
                <?php
                    
                    echo "<br>";
                    
                    foreach ($xml->plato as $plato) {
                        if ($plato['tipo']=='Tapas') {
                            echo "<span class='nombre'>{$plato->nombre}</span>";                            
                            
                            if ($plato->nombre=='Patatas Bravas'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -----------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }  
                            else if ($plato->nombre=='Calamares a la Romana'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" --------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }
                            else if ($plato->nombre=='Croquetas'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }
                            else if ($plato->nombre=='Queso'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";  
                                echo "<span class='calorias'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Jamón'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ----------------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }
                             
                            echo"<br>";
                            echo"<br>";                                             
                        }                       
                            
                    }
                   
                    
                    
                ?>
                    <h2>1r Plato</h2>
                <?php
                    
                    echo "<br>";
                    
                    foreach ($xml->plato as $plato) {

                        if ($plato['tipo']=='1r Plato') {
                            echo "<span class='nombre'>{$plato->nombre}</span>";                           
                            
                            if ($plato->nombre=='Paella Mixta'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }  
                            else if ($plato->nombre=='Canelones'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }
                            else if ($plato->nombre=='Espaguetis a la Boloñesa'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -------";                                
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Fideos con Costillas'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ----------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";  
                                echo "<span class='calorias'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Garbanzos con arroz'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ----------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias'>{$plato->calorias}</span>";
                            }         
                              
                            echo"<br>";
                            echo"<br>";          
                                                    
                        } 
                    }                     
                ?>
            </div>
            <div class="column2_2">
                <?php
                    //conexion al xml
                    $carta="carta.xml";
                    $xml = simplexml_load_file('./xml/carta.xml');
                ?>
                    <h2>2n Plato</h2>
                    
                <?php
                    
                    echo "<br>";
                    
                    foreach ($xml->plato as $plato) {
                        if ($plato['tipo']=='2n Plato') {
                            echo "<span class='nombre'>{$plato->nombre}</span>";                            
                            
                            if ($plato->nombre=='Bistec rebozado con patatas'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";  
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                            }  
                            else if ($plato->nombre=='Secreto con patatas'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -----------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                            }
                            else if ($plato->nombre=='Salmón con tomate'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -----------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";  
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                            }
                            else if ($plato->nombre=='Lenguado'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ------------------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Costillas de cerdo con patatas'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }  
                            
                            echo"<br>";  
                            echo"<br>";                       
                        }                       
                            
                    }
                    
                    
                    
                ?>
                    <h2>Postres</h2>
                    
                <?php
                
                    echo "<br>";
                    
                    foreach ($xml->plato as $plato) {
                        if ($plato['tipo']=='Postres') {
                            echo "<span class='nombre'>{$plato->nombre}</span>";                            
                            
                            if ($plato->nombre=='Sorbete de limon'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" --------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>";
                            }  
                            else if ($plato->nombre=='Helado de vainilla y xocolate'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -----";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>";  
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Coulant de chocolate'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ---------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Crema catalana'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" ----------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }
                            else if ($plato->nombre=='Profiteroles'){
                                echo "<div class='item'>";
                                foreach ($plato->caracteristicas->item as $item){
                                    echo "<img src=".$item.">";
                                }
                                echo "</div>";
                                echo" -------------------------";
                                echo ($plato->precio); 
                                echo"<br>"; 
                                echo"<span class='descripcion'>{$plato->description}</span>"; 
                                echo "<span class='calorias2'>{$plato->calorias}</span>"; 
                            }  
                             
                            echo"<br>";  
                            echo"<br>";                             
                            
                            
                        } 
                                            
                            
                    }
                    
                   
                    echo"<h2>Alérgenos</h2>" 

                                           
                ?>
                <br> 
                <img src="./img/gluten.png" alt="" ><p>Contiene gluten</p>
                <br>
                <br>   
                <img src="./img/huevo.png" alt="" > <p>Contiene huevo</p>
                <br>
                <br> 
                <img src="./img/leche.png" alt=""  ><p>Contiene leche</p>
                <br>
                <br>  
                <img src="./img/soja.png" alt="" > <p>Contiene soja</p>
                <br>
                <br>
                <img src="./img/molusco.png" alt="" > <p>Contiene molusco</p>
                <br>
                <br>  
                <img src="./img/sulfito.png" alt="" >  <p>Contiene sulfito</p>
                <br>
                <br>
                <img src="./img/pescado.png" alt="" > <p>Contiene pescado/marisco</p>
                <br>
                <br> 
                <img src="./img/cacahuete.png" alt="" > <p>Contiene cacahuete</p>
               

                
            </div> 
        </div>         
    </div>    
</body>
</html>

