<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách Bình Luận</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Ngày bình luận</th>
                                    <th scope="col">Nội dung</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listbinhluan as $binhluan) {
                                    extract($binhluan);
                                    $sql = "SELECT ho_ten FROM `khach_hang` WHERE ma_kh = '$iduser';";
                                    $ho_ten_kh = pdo_query($sql);

                                    $sql2 = "SELECT sp.ten_sp FROM `binh_luan` bl INNER JOIN `san_pham` sp on bl.idpro = sp.ma_sp WHERE bl.idpro = '$idpro';";
                                    $ten_sp = pdo_query($sql2);

                                    $xoabl = "index.php?act=xoabl&ma_bl=" . $ma_bl;


                                    echo '<tr>
                                    <th scope="row">' . $ma_bl . '</th>
                                    <td>' . $ho_ten_kh[0]["ho_ten"] . '</td>
                                    <td>' . $ngay_bl . '</td>
                                    <td>' . $noi_dung . '</td>
                                    <td><a href="" class="btn btn-success text-white">Trả
                                            lời</a>
                                        <a href="' . $xoabl . '" class="btn btn-success text-white" style="background-color: red;">Xóa</a>
                                    </td>
                                </tr>';
                                }; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>