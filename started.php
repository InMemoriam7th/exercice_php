<?php

    include_once("./src/head_inc.php");

?>
<body>
    <?php

    include_once("./src/header_inc.php");
    
    ?>
    <main>
        <div class="section" role="table" aria-label="table-info">
            <table>
                <caption>Le top 10 des langages</caption>
                <thead>
                    <tr>
                        <th>Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <?php

                include_once("./src/main_inc.php");

                foreach($tableau as $key_1 => $index){
                    print "<tr>\n";

                    foreach($index as $key_2 => $value){
                        echo "<td>".$value."</td>\n";

                    }

                    print "</tr>\n";
                }
                ?>
                <tfoot>
                        <tr>
                            <th>Classement</th>
                            <th>Langage</th>
                            <th>Type</th>
                        </tr>
                </tfoot>
            </table>
            </div>
                <footer>
                    <?php

                    include_once("./src/footer_inc.php");
                    
                    ?>
                </footer>
            </main>
</body>
</html>