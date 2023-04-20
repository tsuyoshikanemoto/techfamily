<?php
$fruits =[
     'apple'=>'りんご',
     'grape'=>'ぶどう',
     'lemon'=>'れもん',
     'tomato'=>'トマト',
     'peach'=>'もも'
];

 ?>

<dl>
<?php foreach($fruits as $english => $japanese):?>
   <dt><?php echo $english;?></dt>
   <dd><?php echo $japanese;?></dd>
    <?php endforeach;?>
</dl>