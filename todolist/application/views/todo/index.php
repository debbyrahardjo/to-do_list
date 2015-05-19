<div >
    <div>
        <h3 ><?php echo $title ?></h3>
    </div>
    <div style="width:50px; margin-left:10px;" >
        <a href="todo/create">Insert</a>
    </div>
    <div >
        <table>
            <thead> 
                <tr >
                    <th >No</th>
                    <th width=200px>Nama Aktivitas</th>
                    <th >Deadline</th>
                    <th >Status</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody> 
            <?php 
            $no=1;
            foreach ($todo as $todo_list):  ?>
            <tr >
                <td align="center" ><?php echo $no; ?></td>                
                <td align="left" ><?php echo $todo_list['aktivitas']; ?></td>
                <td align="center"><?php echo $todo_list['tanggal']; ?></td>
                <td align="center"><?php
                    if($todo_list['status']==1){ ?>
                        Kelar<?php
                    } 
                    else { ?>
                        <a href="http://<?php echo base_url(); ?>index.php/todo/status/<?php echo $todo_list['id']; ?>">
                        Belum Kelar</a><?php
                    }?>
                </td>
                <td align="center" >
                    <a href="http://<?php echo base_url(); ?>index.php/todo/view/<?php echo $todo_list['id']; ?>">
                    Detail</a> 
                    <a href="http://<?php echo base_url(); ?>index.php/todo/update/<?php echo $todo_list['id']; ?>">
                    Update</a> 
                    <a href="http://<?php echo base_url(); ?>index.php/todo/delete/<?php echo $todo_list['id']; ?>" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data <?php echo $todo_list['aktivitas']; ?>');">
                    Delete</a>
                </td>
            </tr> <?php
            $no++;
            endforeach
            ?>
            </tbody>            
            </table>
        <script type="text/javascript">
            $(function() {
                $('#tabeladm').dataTable({
                    "bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": true,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
    </div>
    </div>

