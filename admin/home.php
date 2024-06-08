<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .col-md-4 {
    max-width: 25%;
  }

  .card-img-absolute {
    position: absolute;
    top: 0px;
    right: 0px;
    height: 100%;
  }

  .row {
    top: 20px;
    left: 300px;
    width: 1200px;
    position: relative;
  }

  #bar-chart {
    width: 500px;
    height: 300px;
    position: relative;
  }

  #line-chart {
    width: 500px;
    height: 300px;
    position: relative;
  }

  #bar-chart::before,
  #line-chart::before {
    content: "";
    position: absolute;
    display: block;
    width: 240px;
    height: 30px;
    left: 155px;
    top: 254px;
    background: #FAFAFA;
    box-shadow: 1px 1px 0 0 #DDD;
  }

  #pie-chart {
    width: 500px;
    height: 250px;
    position: relative;
  }

  #pie-chart::before {
    content: "";
    position: absolute;
    display: block;
    width: 120px;
    height: 115px;
    left: 315px;
    top: 0;
    background: #FAFAFA;
    box-shadow: 1px 1px 0 0 #DDD;
  }

  #pie-chart::after {
    content: "";
    position: absolute;
    display: block;
    top: 260px;
    left: 70px;
    width: 170px;
    height: 2px;
    background: rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    box-shadow: 0 0 3px 4px rgba(0, 0, 0, 0.1);
  }

  .g {
    color: white;
    background-color: cadetblue;
    height: 200px;
  }
</style>

<body>
  <div class="row">
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-danger card-img-holder text-white" style="height: 200px;">
        <div class="card-body">
          <img src="dashboard_img/circle.png" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3" style="font-size: 25px;margin-top: 40px;}">Tổng sản phẩm <i class="	fas fa-gem mdi-24px " style="margin-left: 10px;"></i>
          </h4> <?php

                foreach ($listthongke as $thongke) {
                  extract($thongke);
                  echo '
                    <h2 class="mb-5">' . $tsp . '</h2>
                  ';
                } ?>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="g" style="height: 200px;">
        <div class="card-body">
          <img src="dashboard_img/circle.png" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3" style="font-size: 25px;margin-top: 40px;}">Tài khoản<i class="far fa-address-card mdi-24px" style="margin-left: 10px;"></i>
          </h4> <?php
                foreach ($listthongke3 as $thongke) {
                  extract($thongke);
                  echo '
                    <h2 class="mb-5">' . $ttk . '</h2>
                  ';
                } ?>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-info card-img-holder text-white" style="height: 200px;">
        <div class="card-body">
          <img src="dashboard_img/circle.png" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3" style="font-size: 25px;margin-top: 40px;}">Tổng số danh mục <i class="mdi mdi-bookmark-outline mdi-24px"></i>
          </h4>
          <?php

          foreach ($listthongke1 as $thongke) {
            extract($thongke);
            echo '
                    <h2 class="mb-5">' . $tdm . '</h2>
                  ';
          } ?>

        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-success card-img-holder text-white" style="height: 200px;">
        <div class="card-body">
          <img src="dashboard_img/circle.png" class="card-img-absolute" alt="circle-image" />
          <h4 class="font-weight-normal mb-3" style="font-size: 25px;margin-top: 40px;}">Tổng đơn hàng <i class="	far fa-credit-card mdi-24px " style="margin-left: 10px;"></i>
          </h4>
          <?php

          foreach ($listthongke2 as $thongke) {
            extract($thongke);
            echo '
                    <h2 class="mb-5">' . $tdh . '</h2>
                  ';
          } ?>

        </div>

      </div>
    </div>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <h3>Phân tích danh mục</h3>
    <main style="display: flex;column-gap: 70px;">
      <br>
      <div style="float: left;" id="bar-chart"></div>
      <div style="width: 700px;float: right;">
        <h3>Đơn hàng mới chờ xác nhận</h3>
        <table class="table">
          <thead>
            <tr>
              <th class="col-3">Mã đơn hàng</th>
              <th class="col-3">Tên khách hàng</th>
              <th class="col-3">Trạng thái</th>
              <th class="col-3">Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($listbill as $thongke) {
              extract($thongke);

              echo '<tr>
                    <th>' . $id . '</th>
                    <td>' . $bill_name . '</td>
                    <td class="text-danger">Đang chờ xác nhận</td>
                    <td><a href="index.php?act=chitiet_BILL&id=' . $id . '">Xem</a></td>
                </tr>';
            } ?>
          </tbody>
        </table>
    </main>


    <script>
      google.load("visualization", "1", {
        packages: ["corechart"]
      });
      google.setOnLoadCallback(drawCharts);

      function drawCharts() {
        var barData = google.visualization.arrayToDataTable([
          ['Tên Danh Mục', 'Số Lượng'],

          <?php
          $tongdm = count($listthongkebieudo);
          $i = 1;
          foreach ($listthongkebieudo as $thongke) {
            extract($thongke);
            if ($i == $tongdm) $dauphay = "";
            else $dauphay = ",";
            echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
            $i += 1;
          }
          ?>
        ]);
        var barOptions = {
          focusTarget: 'category',
          backgroundColor: 'transparent',
          colors: ['cornflowerblue', 'tomato'],
          fontName: 'Open Sans',
          chartArea: {
            left: 50,
            top: 10,
            width: '100%',
            height: '70%'
          },
          bar: {
            groupWidth: '80%'
          },
          hAxis: {
            textStyle: {
              fontSize: 11
            }
          },
          vAxis: {
            minValue: 0,
            maxValue: 10,
            baselineColor: '#DDD',
            gridlines: {
              color: '#DDD',
              count: 4
            },
            textStyle: {
              fontSize: 11
            }
          },
          legend: {
            position: 'bottom',
            textStyle: {
              fontSize: 12
            }
          },
          animation: {
            duration: 1200,
            easing: 'out',
            startup: true
          }
        };
        // draw bar chart twice so it animates
        var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
        //barChart.draw(barZeroData, barOptions);
        barChart.draw(barData, barOptions);

        // BEGIN LINE GRAPH

        function randomNumber(base, step) {
          return Math.floor((Math.random() * step) + base);
        }

        function createData(year, start1, start2, step, offset) {
          var ar = [];
          for (var i = 0; i < 12; i++) {
            ar.push([new Date(year, i), randomNumber(start1, step) + offset, randomNumber(start2, step) + offset]);
          }
          return ar;
        }
      };
    </script>
</body>

</html>