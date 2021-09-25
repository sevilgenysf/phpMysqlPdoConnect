<php 
  $servername = "localhost";
  $username = "root";
  $password = " ";

  $conn = mysqli_connect( $servername, $username, $password);

  if(!$conn) {
    die("Bağlantı Hatalı: ". mysqli_connect_error());

  }
    echo "Bağlantı Başarılı";

    for ($i=0; $i < 10; i++) {
      echo $i; 
    }
?>