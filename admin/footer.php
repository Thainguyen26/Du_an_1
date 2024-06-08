<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="active"><a href="index.php"><i class="icon mdi mdi-home"></i><span>Trang
                                    chủ</span></a></li>

                        <li><a href="index.php?act=list_tk"><i class="icon mdi mdi-face"></i><span>Tài
                                    khoản</span></a></li>

                        <li class="parent"><a href="" class=""><i class="fa-solid fa-list"></i><span class="mx-1">Danh
                                    mục</span></a>
                            <ul class="sub-menu">
                                <li><a href="index.php?act=list_danhmuc">Danh mục sản phẩm</a></li>
                                <!-- <li><a href="index.php?act=list_dungtich">Danh mục dung tích</a></li> -->
                            </ul>
                        </li>
                        <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Hàng hóa</span></a>
                            <ul class="sub-menu">
                                <li><a href="index.php?act=list_hanghoa">Sản phẩm</a></li>
                                <!-- <li><a href="index.php?act=view_sanphamct">Sản phẩm chi tiết</a></li> -->
                            </ul>
                        </li>
                        <li class="parent"><a href=""><i class="fa-regular fa-rectangle-list icon"
                                    style="font-size: 16px;"></i><span>Đơn hàng</span></a>
                            <ul class="sub-menu">
                                <li><a href="index.php?act=list_donhang">Tất cả đơn hàng</a></li>
                                <!-- <li><a href="index.php?act=view_sanphamct">Sản phẩm chi tiết</a></li> -->
                            </ul>
                        </li>
                        <li><a href="index.php?act=list_post"><i class="far fa-file-alt icon"
                                    style="font-size: 16px;"></i><span>Bài viết
                                </span></a>
                        </li>
                        <li class="parent"><a href=""><i class="fa-solid fa-comment icon"
                                    style="font-size: 16px;"></i><span>Bình
                                    luận</span></a>
                            <ul class="sub-menu">
                                <li><a href="index.php?act=list_bl">Có tài khoản</a></li>
                                <li><a href="index.php?act=list_bl_ko">Không có tài khoản</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?act=thongke"><i class="icon mdi mdi-chart-donut"></i><span>Thống
                                    kê</span></a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .fa-list {
        margin-left: 3px;
        margin-right: 5px
    }
</style>
<script src="../beagle-dashboard/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>

<script src="../beagle-dashboard/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js"
    type="text/javascript"></script>

<script src="../beagle-dashboard/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/js/app.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js"
    type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
<script src="../beagle-dashboard/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        //-initialize the javascript
        App.init();
        App.dashboard();

    });
</script>