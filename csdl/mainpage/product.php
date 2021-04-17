<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/png" href="/update/">
  <link rel="shortcut icon" type="image/png" href="image/icon.png">
  <title>Shop bán gia vị các kiểu</title>
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Bán gia vị online</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div style="width: 170px;">       </div>
      <form action="product.php" method="GET">
          <input type="text" placeholder="Search.." name="search">
          <input type="submit" name="ok" value="search">
      </form>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Trang chủ
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Thông tin chi tiết</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dịch vụ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../loginandregister/"><i class="fas fa-shopping-cart"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../loginandregister/register.html">Đăng ký</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../loginandregister/login4.php">Đăng nhập</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Em bán gia vị</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Loại 1</a>
          <a href="#" class="list-group-item">Loại 2</a>
          <a href="#" class="list-group-item">Loại 3</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
        <?php  
        //  include 'pagination.php';
      //    while($row = mysqli_fetch_assoc($result)){
      //     $display= '<li>'.$row['img_dir'].'</li>';
      //  }
      //dòng for thần thánh dùng để hiển thị sản phẩm
      if(isset($_REQUEST['ok'])){
        // gán hàm addslashes để chống sql injection
        $search =   addslashes($_GET['search']);
        // nếu $search rỗng thì báo lỗi,tức là người dùng chưa nhập liệu mà đã submit
        if (empty($search)) {
            echo "Yêu cầu nhập dữ liệu vào ô trống";
        }
        else{
            // dùng câu lệnh like trong sql và sử dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
            $query  =   "SELECT * FROM insertimage WHERE `name` like '%$search'";

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
               

                // vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu trong table và trả về dữ liệu ở dạng array.
               
                while ($row = mysqli_fetch_assoc($sql)) {
                    echo'<div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="add_cart.php"><img style="height:208px;width: 254px;" class="card-img-top" src="'.$row['img_dir'].'"  title="Combo 4 muối tiêu sọ Tây Ninh tinh nguyên" alt="Combo 4 muối tiêu sọ Tây Ninh tinh nguyên"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="add_cart.php" style="font-size:18px">'.$row['name'].'</a>
                        </h4>
                        <h5>Giá:'.$row['price'].' đồng</h5>
                        <p class="card-text">'.$row['function'].'</p>
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                  </div>';
                        }
                        echo "$num kết quả trả về với từ khóa <b>$search</b>";
                }
                
                 else{
                         echo "Không tìm thấy kết quả";
                     }
        }
    }

        
                    
          
                 ?>    
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
 
 
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
