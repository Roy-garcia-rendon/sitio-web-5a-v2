<?php
            if (isset($_POST['Registro'])) {
                # code...
            

            $nombreb=$_POST['nombre'];
            echo " $nombreb <br>";

            $correob=$_POST['correo'];
            echo " $correob <br>";

            $edadb=$_POST['edad'];
            echo " $edadb <br>";

            $generob=$_POST['genero'];
            echo " $generob <br>";

            $fech_nb=$_POST['fech_n'];
            echo " $fech_nb <br>";

            $n_telb=$_POST['n_tel'];
            echo " $n_telb <br>";

            $grupob=$_POST['grupo'];
            echo "Grupo: $grupob <br>";

            $gradob=$_POST['grado'];
            echo " Grado: $gradob <br>";
        }
            ?>