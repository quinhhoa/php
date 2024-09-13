
    <?php 

   
    // tạo kết nối
    $conn = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'hocphptenlop');
    // Check connection
    if (!$conn)
        die("Unable to connect to MySQL: " .mysqli_connect_error());

    $sql_stmt = "SELECT * FROM my_contacts";
    / // Tạo database
    $sql = " CREATE TABLE thanhvien (
       id int(6) UNSIGNED AUTO_INCREMENT primary key,
       hoten varchar(30) not null,
       mk varchar(30) not null,
       level int(8)
    ) ";
    // // thực hiện truy vấn kết nối với dt conn và tạo dt mới là csdl
    if($conn->query($sql) == TRUE ){
        echo 'tạo  bảng thành công' ;
    }
    else {
        echo 'không thành công' ;
    }
    //  thêm dl
    $id = '';
    $hoten = 'nguoidung';
    $mk = '1123456';
    $level = 1;

    $sql = " INSERT INTO thanhvien(id, hoten, mk, level)
    VALUES('$id', '$hoten', '$mk', '$level')";
    mysqli_query($conn, $sql);
    
    // Sửa dl
    $id = 6 ;
    $hoten = 'quinhhoa';
    $mk = '206204';
    $level = 6;
    $sql = "UPDATE thanhvien SET id='$id', hoten= '$hoten', mk='$mk', level='$level' WHERE id=2 ";
    mysqli_query($conn, $sql);

    // Xóa dl
    $sql = "DELETE FROM thanhvien WHERE id='4' ";
    mysqli_query($conn, $sql) //thực thi truy vấn trên

    // // lấy dl
    $sql = "SELECT * FROM thanhvien";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result )>0){
        while ($row = mysqli_fetch_array($result)){
            echo $row ['id'] ."|" .$row['hoten'] ."|" .$row['mk'] ."|" .$row['level'];

            echo "<br>";
        }
    }
    //  slide 14
    const DB_TYPE = "mysql";
    const DB_HOST ="localhost";
    const DB_NAME = "baitap5";
    const USER_NAME = "root";
    const USER_PASSWORD = "";

    try {
        $connection = new PDO(sprintf("%s:host=%s;dbname=%s", DB_TYPE, DB_HOST, DB_NAME),USER_NAME,USER_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Kết nối thành công!" ."<br>";

    //Thêm dữ liệu vào bảng
        $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
        VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";
        $stmt = $connection->prepare($sql);

        // Gán giá trị cho các placeholder
        $stmt->bindParam(':full_names', $full_names);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':contact_no', $contact_no);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':country', $country);

        // Gán giá trị và thực thi
        $full_names = 'Hera';
        $gender = 'Female';
        $contact_no = '456';
        $email = 'hera@olympus.mt.co';
        $city = 'Olympus';
        $country = 'Greece';
        
        $stmt->execute();
        
        echo "Dữ liệu đã được thêm thành công!" ."<br>";

    // Cập nhật dữ liệu 
        $sql = "UPDATE my_contacts SET full_names = :full_names WHERE id = :id";
        $stmt = $connection->prepare($sql);
        // Gán giá trị cho các placeholder
        $stmt->bindParam(':full_names', $full_names);
        $stmt->bindParam(':id', $id);

        // Gán giá trị và thực thi
        $full_names = 'Verra';
        $id = 1;
        
        $stmt->execute();
        echo "Dữ liệu đã được cập nhật!" ."<br>";

    //Xoá dữ liệu
        $sql = "DELETE FROM my_contacts WHERE id = :id";
        $stmt = $connection->prepare($sql);

        //Gán giá trị cho placeholder
        $stmt->bindParam(':id', $id);

        // Gán giá trị và thực thi
        $id = 1;

        $stmt->execute();
        echo "Dữ liệu đã được xóa!" ."<br>";
        
    //Hiển thị dữ liệu
        $sql = "SELECT * FROM my_contacts";
        $stmt = $connection->prepare($sql);

        $stmt->execute();

        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        
        while($row = $stmt->fetch()) {
            echo 'ID: ' . $row['id'] . '<br>';
            echo 'Full Names: ' . $row['full_names'] . '<br>';
            echo 'Gender: ' . $row['gender'] . '<br>';
            echo 'Contact No: ' . $row['contact_no'] . '<br>';
            echo 'Email: ' . $row['email'] . '<br>';
            echo 'City: ' . $row['city'] . '<br>';
            echo 'Country: ' . $row['country'] . '<br>';
        }

    } catch (PDOException $e) {
        echo "Lỗi kết nối: " . $e->getMessage();
    }

    ?>
