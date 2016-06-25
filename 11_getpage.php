<?php
header('Content-Type: text/html;charset=utf-8');

//>>1.从数据库中查询出数据
    //>>1.1 连接数据库
    require '../DB.class.php';
    $db  = DB::getInstance(array('user'=>'root','password'=>'admin','dbname'=>'ajaxdemo'));

    //>>1.2 接收页码
    $page  = isset($_GET['page'])?$_GET['page']:1;
    $pageSize  = 5;
    $start  = ($page-1)*$pageSize;  //根据页码计算出从哪个开始查询

    $sql = "select * from goods limit $start,$pageSize";

    $rows = $db->fetchAll($sql);

?>
<table border="1px" width="80%">
    <tr>
        <th>名称</th>
        <th>数量</th>
        <th>价格</th>
    </tr>
    <?php foreach($rows as $row): ?>
    <tr>
        <td><?php echo $row['goods_name'] ?></td>
        <td><?php echo $row['goods_number'] ?></td>
        <td><?php echo $row['goods_price'] ?></td>
    </tr>
    <?php endForeach; ?>
</table>

<?php
    $sql  = "select count(*) from goods";
    $total = $db->fetchColumn($sql);

    //加载分页工具条类
    require '../Pagination.php';
    $pagination = new Pagination($total,$pageSize);
    echo $pagination->fpage();//生成分页工具条的html

?>
