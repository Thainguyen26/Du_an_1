<?php
ob_start();
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$id = $_REQUEST['idsp'];
$dsbl = load_binhluan($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ctsanpham.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<div class="container">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <div class="post-comments" >
    <form  method="post">
      <div class="form-group">
        <label for="comment">Để lại comment của bạn</label>
        <input type="hidden" name="id_sp" value="<?=$id?>">
        <?php
            if(isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            }?>
        <input type="hidden" name="id_user" value="<?=$id?>">
        <textarea name="noidung" class="form-control" rows="3" placeholder="Mời nhập đánh giá" required></textarea>
      </div>
      <input style="margin-left:1% ;border-radius:50px;padding:5px 10px;background-color:#FFA2A2;border:1px solid #FFA2A2;color:white;" class="" type="submit" name="guibinhluan" value="SEND">
      <!-- <button type="submit" class="btn btn-default" name="guibinhluan">Send</button> -->
    </form>

    <div class="comments-nav">
      <ul class="nav nav-pills">
        <li role="presentation" class="dropdown">
          <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  there are 2593 comments <span class="caret"></span>
                </a> -->
          <ul class="dropdown-menu">
            <li><a href="#">Best</a></li>
            <li><a href="#">Hot</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <?php foreach ($dsbl as $bl => $value) {?>
    <div class="row">
        <div class="media">
                <button class="btn btn-default btn-xs" type="button" data-toggle="<?=$value['id'] ?>" data-target="<?=$value['id'] ?>" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button> <span class="label label-info">User</span> <span class="a"><?php 
                if ($value['user'] != null) {
                    echo $value['user'];
                } else {
                    echo 'Ẩn danh';
                }?></span> <?=$value['ngaybinhluan'] ?>
                </div>
                <div class="panel-collapse collapse in" id="<?=$value['id'] ?>">
                <div class="media-left">
                    <div class="vote-wrap">
                    <div class="save-post">
                        <a href="#"><span class="glyphicon glyphicon-star" aria-label="Save"></span></a>
                    </div>
                    <div class="vote up">
                        <i class="glyphicon glyphicon-menu-up"></i>
                    </div>
                    <div class="vote inactive">
                        <i class="glyphicon glyphicon-menu-down"></i>
                    </div>
                    </div>
                </div>
                <div class="media-body">
                    <p><?=$value['noidung'] ?></p>
                    <div class="comment-meta">
                    <span class="abc"><a href="#">delete</a></span>
                    <span class="abc"><a href="#">report</a></span>
                    <span class="abc"><a href="#">hide</a></span>
                    <span class="abc">
                        <a class="" role="button" data-toggle="collapse" href="#replyCommentT" aria-expanded="false" aria-controls="collapseExample">reply</a>
                        </span>
                    <div class="phanhoi">
                    <h4 class="">Phản hồi của admin</h4>
                    <span class="label label-info" style="background-color: #cca628;">ADmin</span>: <span class="g">
                    <?php if ($value['phanhoi'] != null) {
                                echo '';
                                echo $value['phanhoi'];
                            } else {
                                echo 'Đợi phản hồi của admin';
                            }
                        ?>
                    </div>
                </div>
                
        </div>
      
  </div>
  </div><?php } ?>
 
</div>
        <style >
            .row{
                background: aliceblue;
                padding: 6px;
                border-bottom: 1px solid #d51b2e;
                margin-bottom: 10px;
            }
           
            .phanhoi{
                margin-bottom: 10px;
            }
    .a{
        margin-right: 10px;
        color: lightcoral;
    }
    .abc{
        margin: 0px 10px;
    }
    .post-comments{
    position: relative;
    right: 80px;
    top: 20px;
    }
</style>
<script>
    $('[data-toggle="<?=$value['id'] ?>"]').on('click', function() {
    var $this = $(this),
            $parent = typeof $this.data('parent')!== 'undefined' ? $($this.data('parent')) : undefined;
    if($parent === undefined) { 
        $this.find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
        return true;
    }

    /* Open element will be close if parent !== undefined */
    var currentIcon = $this.find('.glyphicon');
    currentIcon.toggleClass('glyphicon-plus glyphicon-minus');
    $parent.find('.glyphicon').not(currentIcon).removeClass('glyphicon-minus').addClass('glyphicon-plus');

});

</script>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $id_sp = $_POST['id_sp'];
            $id_user = $_POST['id_user'];
            $ngaybinhluan = date('d/m/Y');
            insert_binhluan($id_sp,$id_user,$noidung);
            // echo '<meta http-equiv="refresh" content="0;url=index.php?act=spchitiet&id=".$id_sp>';
        }
        ?>
    </div>
</body>

</html>