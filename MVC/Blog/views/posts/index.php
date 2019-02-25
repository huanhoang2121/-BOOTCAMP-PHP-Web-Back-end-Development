<?php
echo '<table>';
   echo '<tr>
   <td>Id</td>
   <td>Title</td>
   <td>Content</td>
   </tr>';
foreach ($posts as $post){
   echo '<tr>
   <td>'. $post->id. '</td>
   <td><a href="index.php?controller=posts&action=show&id='. $post->id.'">'. $post->title. '</a></td>
   <td>'. $post->content. '</td>
   </tr>';
}
echo '</table>';
?>