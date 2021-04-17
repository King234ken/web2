<html>
    <head>
        <title>Demo Search Basic by freetuts.net</title>
    </head>
    <body>
        <div align="center">
            <form action="search.php" method="get">
                Search: <input type="text" name="search" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
            if(isset($_REQUEST['ok'])){
                // gán hàm addslashes để chống sql injection
                $search =   addslashes($_GET['search']);

                // nếu $search rỗng thì báo lỗi,tức là người dùng chưa nhập liệu mà đã nhấn submit
                if(empty($search)){
                    echo "Yêu cầu nhập dữ liệu vào ô trống";
                }
                else{
                    
                }
            }
        // Phần code PHP xử lý tìm kiếm
         
        ?>
    </body>
</html>