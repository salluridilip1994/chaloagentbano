<?php
include "./webmaster/initialization.php";
$sql1="SELECT * FROM `industry_news` ORDER BY `Id` DESC";
$inews_rows=mysqli_query($con,$sql1);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Title--->
        <title>LIC</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <!---Custom css--->
        <link rel="stylesheet" href="styles.css">
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    
    <script src="jquery.dreamalert.js"></script>
    <link href="jquery.dreamalert.css"rel="stylesheet">  
        <script src="lic.js">
        </script>
        <script type="text/javascript">
        $(document).ready( function () {
        $('#mydatatable1').DataTable();
        } );
        </script>
        <style>
            .modal-content {
    margin-top: 14%;
}
@media (min-width: 320px) and (max-width: 420px)
{
.news
{
    margin-top: 5%;
}
}
        </style>
    </head>
    <body>
        <div id="header"></div>
        <section class="mt-5" style="margin-top: 10%!important;">
            <div class="container">
                <h1 class="text-center font-weight-bold m-5 news"style="background-color:#005476; color: white;">Industry News </h1>
                <table class="table inews-table" id="mydatatable1">
                    <thead>
                        <tr style="color: #BB1B21;">
                            <th scope="col">S.NO</th>
                            <th scope="col">Title</th>
                            <th scope="col">Source</th>
                            <th scope="col">Published Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $x1=0;
                        while($inews_row=mysqli_fetch_array($inews_rows))
                        {
                        ?>
                        <tr>
                            <th scope="row"><?php echo ++$x1;?></th>
                            <?php
                            $Ext=explode('/',$inews_row['Content-type']);
                            $ActualExt=strtolower(end($Ext));
                            if( $ActualExt=='pdf')
                            {
                            ?>
                            <div class="container">
                                <td width="">
                                    <a  data-toggle="modal" data-target="#myModal<?php echo '-i'.$x1?>" style="color: blue;text-decoration: underline;"><?php echo $inews_row['Title'];?></a><i class="fas fa-file-pdf fa-1x text-danger" ></i>
                                    <?php
                                    if(date('F-Y', strtotime($inews_row['Published_Date']))==date('F-Y'))
                                    {
                                    echo "<img src='webmaster/img/front-end/new1.gif' height=30' width='40'>";
                                    }
                                    ?>
                                </td>
                                <div id="myModal<?php echo '-i'.$x1?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <embed src="<?php echo   "webmaster/".$inews_row['File_Path']; ?>" frameborder="0" width="100%" height="500px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            else {
                            ?>
                            <td width="170px"><a href="display_IndustryNews.php?id='<?php echo $inews_row['Id']?>'" style="color: blue;text-decoration: underline;"><?php echo $inews_row['Title']?></a>
                            <?php
                            if(date('F-Y', strtotime($inews_row['Published_Date']))==date('F-Y'))
                            {
                            echo "<img src='lic-do-mini/img/front-end/new1.gif' height=30' width='40'>";
                            }
                            ?>
                        </td>
                        <?php } ?>
                        <td><?php echo $inews_row['Source']; ?></td>
                        <td><?php echo date('d-F-Y', strtotime($inews_row['Published_Date']))?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <div style="height:100px"></div>
    <div class="main-footer"></div>
    <!-- JQuery -->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</body>
</html>