<?php



$inc = include('conectar.php');
    
    if($inc){
        
        $list_peli ='"list_peli"';
        $peli_list = '"peli_list"';

        $id_titulo = '"Titulo_peli"';
        $id_de_la_peli = '"id_de_la_peli"';
        
        $id_link = '"Select_peli.php"';
        $post ='"post"';
        $enctype='"multipart/form-data"';

        $id_ingresada = '8';
        $diez = '10';
        $treinta = '30';
        $actualizar = '"php/actualizar.php"';
        $id_formulario = '"formulario"';
        

        $id_selecionada = '"id_selecionada"';
        $id_name = '"name"';
        $id_sinopsis = '"sinopsis"';
        $id_img = '"img"';  

        $style='"display:none;"';
        $div_edicion = '"edicion"';
        
            
        
        echo "   <div id=".$div_edicion.">";
            echo "<form id=$id_formulario method='POST' action=$actualizar enctype=$enctype>";
                                    
                                    
                        echo "<textarea name=$id_selecionada placeholder='Selecione la Id de la pelicula'></textarea> <br>";
                        echo "<textarea name=$id_name  placeholder='Nuevo Titulo'></textarea> <br>";
                        echo "<textarea name=$id_sinopsis cols=".$treinta." rows=".$diez." placeholder='Nueva Sinopsis'></textarea> <br>";
                        echo "<textarea name=$id_img placeholder='Nuevo Link'></textarea> <br>";
                        echo "<button>Finalizar</button>";
                                    
            echo "</form>";
        echo "</div>";

        $consulta = "SELECT * FROM  pelicula"; /*datospeli*/
        $resultado = mysqli_query($conexion, $consulta); //aqui<--
        if($resultado){

            echo "<div id=$list_peli>";

                while($row = $resultado->fetch_array()){
                    $id = $row['id'];
                    $nombre = $row['nombre'];
                    $sinopsis = $row['sinopsis'];
                    $imagen_url = $row['img'];
                    
                    echo "

                        <div id=$peli_list>
                            <form  method=$post enctype=$enctype>

                                <div id=$id_de_la_peli>
                                    <p>ID: $id</p>
                                </div>
                                <div id=$id_titulo>
                                    <p> $nombre</p>
                                </div>
                                
                                
                            </form>
                        </div>
                    ";
                    ?>
                    
                    <?php 
                }
            echo "</div>";
            
        }
    }

?>