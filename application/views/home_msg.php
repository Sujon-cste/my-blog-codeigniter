<?php 
foreach($result as $vresult)
{
?>
<div class="post">
    <h2 class="title"><?php echo $vresult->title?></h2>
    <div class="story">
        <p>
            <?php echo $vresult->description?>
        </p>
            
        
 
    </div>
    <div class="meta">
        
        <p class="date">Posted on February 22, 2007 by Admin</p>
        <p class="file">Filed under <a href="#">Comments</a>
            | <a href="#">Edit</a> | <a href="#">
                Delete</a></p>
    </div>
    <a align="center">edit</a>
</div>

  <?php

}
?>
</div>