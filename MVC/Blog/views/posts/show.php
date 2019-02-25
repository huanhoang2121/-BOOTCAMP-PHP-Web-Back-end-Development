<?php
echo '<table>';
         echo '
         <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Content</td>
         </tr>';
         echo '
         <tr>
            <td>'. $post->id. '</td>
            <td><a >'. $post->title. '</a></td>
            <td>'. $post->content. '</td>
         </tr>';
echo '</table>';
?>