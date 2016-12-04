<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Text</th>
        <th>Actions</th>
        <th>Date created</th>
    </tr>
    </thead>
    <tbody>
        <?php //print_r ($Allresult);?>
        <?php for( $i=0; $i< count($Allresult); $i++){
            if($Allresult[$i]['status'] == 1 ){
                $stat = "<td class='center'>
            <span class='label-success label label-default'>Active</span>
        </td>";} else{
                $stat = "<td class='center '>
            <span class='label-default label label-danger'>Hidden</span>
        </td>";
            }
    echo "<tr>
        <td>{$Allresult[$i]['name']}</td>
        <td class='center'>{$Allresult[$i]['email']}</td>
        {$stat}
        <td class='center'>{$Allresult[$i]['text']}</td>
        <td class='center'>
            <a class='btn btn-info' href='?action=edit&id={$Allresult[$i]['id']}'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
            <a class='btn btn-danger' href='#'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>
        <td class='center'>{$Allresult[$i]['created']}</td>
    </tr>";}
    ?>
    </tbody>
    </table>