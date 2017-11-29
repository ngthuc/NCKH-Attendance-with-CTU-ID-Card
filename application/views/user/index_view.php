<?php
// echo "<pre>";
// print_r($info);
// echo "</pre>";
?>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="list_cate" class="list">
    <tr>
         <td colspan="6" align="center"><a href="<?php echo base_url(); ?>user/add">Add User</a><br /></td>
     </tr>
    <tr>
        <th width="20">STT</th>
        <th width="80">Name</th>
        <th width="30">Level</th>
        <th width="10">Edit</th>
        <th width="10">Delete</th>
    </tr>

    <tr>
        <?php
            $stt=0;
            foreach($info as $item){
                $stt++;
                echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>$item[username]</td>";
                    if($item['level'] == 1){
                        echo "<td class='admin'>Administrator</td>";
                    } else if($item['level'] == 2){
                        echo "<td class='smod'>Super Moderator</td>";
                    } else{
                        echo "<td>Member</td>";
                    }
                    echo "<td><a href=".base_url()."user/edit/$item[id]>Edit</a></td>";
                    echo "<td><a href=".base_url()."user/del/$item[id]  onclick='return xacnhan();'>Delete</a></td>";
                echo "</tr>";

            }
        ?>
    </tr>
     <tr>
         <td colspan="6" align="center">Có tổng cộng <?php echo $total_user; ?> thành viên.<br /></td>
     </tr>


</table>

<?php
    if(isset($mess) && $mess != ''){
        echo "<div class='mess_succ'>";
        echo "<ul>";
            echo "<li>$mess</li>";
        echo "</ul>";
        echo "</div>";
    }
?>
