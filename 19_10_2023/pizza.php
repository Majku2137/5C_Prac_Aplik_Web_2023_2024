<?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $km = $_POST['km'];
                    $ciepla = isset($_POST['ciepla']);
                    
                    $koszt = $km * 0.5;

                    if($ciepla)
                    {
                        $Dostawa = $koszt * 1.15;
                    }
                    else{
                        $Dostawa = $koszt;
                    }

                    echo "Koszt dowozu pizzy wynosi: " . $Dostawa . " zł";
            }
?>