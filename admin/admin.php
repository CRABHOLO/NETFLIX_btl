<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    
    require "template/header.php";
?>
    <main >
        <div class="container_admin container ">
            <h2 class=" text-center text-danger mt-5">DANH SÁCH TÀI KHOẢN ĐĂNG KÝ</h2>
            <div>
                <a class="btn btn-danger " href="add_employee.php">Thêm</a>
            </div>
            <table class="table bg-white" >
                <thead> 
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mật Khẩu</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                    <?php
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','netflix');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT id, fullname, email, password FROM users ";
                        $result = mysqli_query($conn,$sql);
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr>
                                    <th scope="row"><?php echo $row['id']; ?></th>
                                    <td><?php echo $row['fullname']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['password']; ?></td>
                                    <td><a href="update_employee.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square text-danger "></i></a></td>
                                    <td><a href="delete_employee.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash text-danger"></i></a></td>
                                </tr>
                    <?php
                            }
                        }
                        // Bước 04: Đóng kết nối Database Server
                        mysqli_close($conn);
                    ?>
                    
                    
                </tbody>
                </table>
        </div>    
    </main>

<?php
    include("template/footer.php");
?>