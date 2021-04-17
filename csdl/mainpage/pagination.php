
    <?php
        // kết nối csdl
        $conn= mysqli_connect("localhost","root","","login");
        // tìm tổng số record
        $result     =   mysqli_query($conn,'SELECT COUNT(id) as total FROM insertimage');
        $row        =   mysqli_fetch_assoc($result);
        $total_records  =   $row['total'];
        // tìm limit và current_page
        $current_page   =   isset($_GET['page'])    ?   $_GET['page']:1;
        $limit  =   9;
        // tính tổng số trang
        $total_page =   ceil($total_records/$limit);
        // giới hạn current_page trong 1 khoảng 1 đến total_page
        if($current_page    >   $total_page){
            $current_page   =   $total_page;
        }
        elseif($current_page    <   1){
            $current_page   =   1;
        }
        // tìm start
        $start  =   ($current_page  -   1)*$limit;
        // truy vấn lồng lấy danh sách
        $result =   mysqli_query($conn,"SELECT *    FROM    insertimage  LIMIT   $start,$limit");
    ?>
    
        <?php
       
        
        ?>
    
        <?php
            // phần hiển thị sản phẩm
            

            // lập khoảng giữa
            {
                // nếu là trang hiện tại thì hiện thị thẻ span
                //  ngược lại hiện thị thẻ a
                // if($i =$current_page){
                //     echo '<span>'.$i.'</span> |';
                // }
                // else{
                //    echo '<a href="pagination3.php?page='.$i.'">'.$i.'</a>';
                // }
            }   
            // nếu current_page < $total_page và total_page >1 mới hiện thị nút prev
        ?>
 