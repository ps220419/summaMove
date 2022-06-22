<ul id='navul'>
        <li class="navitem navselected" id="homebtn"><p>⌂</p></li>
        <li class="navitem hoverdiv">
                
            <a href="partijen.php"><p id="spnav">placeholder1</p></a>
                
            <div class="hoverbox"> 

                <div class='hoverbox-content'>
                    <p>placeholder1</p>
                </div>
                <div class='hoverbox-content'>
                    <p>placeholder2</p>
                </div>
                <div class='hoverbox-content'>
                    <p>placeholder3</p>
                </div>
                <div class='hoverbox-content'>
                    <p>placeholder4</p>
                </div>

                <!-- 
                    @foreach($rows as $row) 

                        echo "
                            <div onclick=redirect('Partijen.php?id=$row[PartijId]') class='hoverbox-content'>
                            <p>$row[PartijName]</p>
                            </div>
                        ";
                    }
                -->
            </div>
        </li>
    <li class="navitem"><p>placeholder2</p></li>
    <li class="navitem"><p>placeholder3</p></li>
</ul>