<?php
      if(isset($_REQUEST['ok'])){
        // gán hàm addslashes để chống sql injection
        $search =   addslashes($_GET['search']);
        // nếu $search rỗng thì báo lỗi,tức là người dùng chưa nhập liệu mà đã submit
        if (empty($search)) {
            echo "Yêu cầu nhập dữ liệu vào ô trống";
        }
        else{
            // dùng câu lệnh like trong sql và sử dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
            $query  =   "SELECT * FROM mainuser WHERE `name` like '%$search'";

            // kết nối sql
            $conn= mysqli_connect("localhost","root","","login");
            mysqli_set_charset($conn,'utf8');//hiển thị tiếng việt
            // thực thi truy vấn
            $sql    =   mysqli_query($conn,$query);
            
            // đếm số dòng trả về trong sql
            $num    =   mysqli_num_rows($sql);

            // nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kq
            if($num >   0   &&  $search !=""){
                // dùng $num để đếm số dòng trả về
                echo "$num kết quả trả về với từ khóa <b>$search</b>";

                // vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu trong table và trả về dữ liệu ở dạng array.
               
                while ($row = mysqli_fetch_assoc($sql)) {
                    echo '<table border="1" cellspacing ="0" cellpadding ="10">';
                    echo  '<tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['name'].'</td>
                                <td>'.$row['password'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['address'].'</td>
                           </tr>';
                    echo       '</table>';
                }
            }
            else{
                echo "Không tìm thấy kết quả";
            }
        }
    }

?>