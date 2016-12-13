<div class="col-sm-12 col-lg-12">
<div class="col-sm-1 col-lg-1"></div>
<div class="col-sm-10 col-lg-10">
<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th class='center'>Name</th>
        <th class='center'>Email</th>
        <th class='center'>Status</th>
        <th class='center'>Text</th>
        <th class='center'>Image</th>
        <th class='center'>Actions</th>
        <th class='center'>Date created</th>
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
        <td class='center'>{$Allresult[$i]['name']}</td>
        <td class='center'>{$Allresult[$i]['email']}</td>
        {$stat}
        <td class='center'>{$Allresult[$i]['text']}</td>
        <td class='center'><img src=\"{$Allresult[$i]['image']}\"></td>
        <td class='center'>
            <a class='btn btn-info' href='?action=edit&id={$Allresult[$i]['id']}'>
                <i class='glyphicon glyphicon-edit icon-white'></i>
                Edit
            </a>
            <a class='btn btn-danger' href='?action=delete&id={$Allresult[$i]['id']}'>
                <i class='glyphicon glyphicon-trash icon-white'></i>
                Delete
            </a>
        </td>
        <td class='center'>{$Allresult[$i]['created']}</td>
    </tr>";}
    ?>
    </tbody>
    </table>
    </div>
    <div class="col-sm-1 col-lg-1"></div>
    </div>