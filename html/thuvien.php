<?php 

    include 'connectDB.php';

	function showGioHang() {
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                // code...
                echo '<tr>
                        <td><img src="'.$_SESSION['giohang'][$i][0].'" class="cart__content-left-table-img" alt=""></td>
                        <td><p>'.$_SESSION['giohang'][$i][1].'</p></td>
                        <td><p>'.$_SESSION['giohang'][$i][2].'</p></td>
                        <td><p>'.$_SESSION['giohang'][$i][3].'</p></td>
                        <td><p>'.$tt.' <sup>VND</sup></p></td>
                        <td><span><a href="giohang.php?delid='.$i.'" >X</a></span></td>
                    </tr>';
            }
        }
    }

    function showGioHang2() {
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                // code...
                echo '<tr>
                        <td><img src="'.$_SESSION['giohang'][$i][0].'" class="cart__content-left-table-img" alt=""></td>
                        <td><p>'.$_SESSION['giohang'][$i][1].'</p></td>
                        <td><p>'.$_SESSION['giohang'][$i][2].'</p></td>
                        <td><p>'.$_SESSION['giohang'][$i][3].'</p></td>
                        <td><p>'.$tt.' <sup>VND</sup></p></td>
                    </tr>';
            }
        }
    }

    function showTongTien() {
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            $tong = 0;
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                // code...
                // echo '<table class="cart__content-right-table">
                //      <tr>
                //          <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                //      </tr>
                //      <tr>
                //          <td>TỔNG SẢN PHẨM</td>
                //          <td>'.sizeof($_SESSION['giohang']).'</td>
                //      </tr>
                //      <tr>
                //          <td>TỔNG TIỀN HÀNG</td>
                //          <td><p>'.$tong.' <sup>VND</sup></p></td>
                //      </tr>
                //      <tr>
                //          <td>TẠM TÍNH</td>
                //          <td><p style="color: black; font-weight: bold;">'.$tong.' <sup>VND</sup></p></td>
                //      </tr>
                //  </table>';
            }
            echo '<table class="cart__content-right-table">
                     <tr>
                         <th colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                     </tr>
                     <tr>
                         <td>TỔNG SẢN PHẨM</td>
                         <td>'.sizeof($_SESSION['giohang']).'</td>
                     </tr>
                     <tr>
                         <td>TỔNG TIỀN HÀNG</td>
                         <td><p>'.$tong.' <sup>VND</sup></p></td>
                     </tr>
                     <tr>
                         <td>TẠM TÍNH</td>
                         <td><p style="color: black; font-weight: bold;">'.$tong.' <sup>VND</sup></p></td>
                     </tr>
                 </table>';
        }
    }

    function tongdonhang() {
        $tong = 0;
        if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            
            for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                $tt = $_SESSION['giohang'][$i][4] * $_SESSION['giohang'][$i][3];
                $tong += $tt;
                // code...
                
            }
        }

        return $tong;
    }

    
?>