<div class="be-content">
  <h4 class="g">Thống kê doanh thu theo tháng</h4>
<?php 
  $con = new mysqli('localhost','root','','duan_1');
  $query = $con->query("
  SELECT YEAR(STR_TO_DATE(ngaydathang, '%d/%m/%Y %h:%i %p')) AS year,
  MONTH(STR_TO_DATE(ngaydathang, '%d/%m/%Y %h:%i %p')) AS month,
  SUM(total) AS total_amount
FROM bill
GROUP BY YEAR(STR_TO_DATE(ngaydathang, '%d/%m/%Y %h:%i %p')), MONTH(STR_TO_DATE(ngaydathang, '%d/%m/%Y %h:%i %p'))
ORDER BY YEAR(STR_TO_DATE(ngaydathang, '%d/%m/%Y %h:%i %p')), MONTH(STR_TO_DATE(ngaydathang, '%d/%m/%Y %h:%i %p'))");

foreach($query as $data)
{
  $month[] = $data['month'];
  $amount[] = $data['total_amount'];
}
?>
<div class="alo">
<canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?php echo json_encode($month) ?>,
    datasets: [{
      label: '#Doanh số trong tháng',
      data:<?php echo json_encode($amount) ?>,
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>

<div class="moi">
<h4 class="g">Thống kê sản phẩm</h4>
<div id="bar-chart" style="width: 600px; height: 400px;"></div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
  google.load("visualization", "1", { packages: ["corechart"] });
  google.setOnLoadCallback(drawCharts);
function drawCharts() {
      var barData = google.visualization.arrayToDataTable([
        ['Tên sản phẩm', 'Số lượng', 'Doanh thu'],
        <?php
        $tongdm = count($thongke44);
        $i = 1;
        foreach ($thongke44 as $thongke) {
          extract($thongke);
          $tr = 19990;
          if ($i == $tongdm) $dauphay = "";
          else $dauphay = ",";
          echo "['" . $thongke['name'] . "', " . $thongke['soluong'] . "," . $thongke['total_revenue'] . "]" . $dauphay;
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
</div>
<div class="conme">

    <div class="bb" style="top: 50px; position: relative;">
      <h4 class="g">Bảng sản phẩm</h4>
      <table class="formloai" style="text-align: center;">
        <tr style="background-color: teal;color:white;">
          <th style="padding:10px;">Sản phẩm bán chạy</th>
          <th>Số lượng đã bán</th>
          <th>Doanh thu</th>
        </tr>
        <?php foreach($thongke44 as $list=> $tk):?>
        <tr>
          <td class="a">
            <?=$tk['name']?>
          </td>
          <td class="a">
            <?=$tk['soluong']?>
          </td>
          <td class="a">
            <?=number_format($tk['total_revenue'], 0, ',', '.')?>₫
          </td>

          <?php endforeach; ?>
        </tr>
      </table>
    </div>
    <div class="bb" style="margin: 100px 0px;">
      <h4 class="g">Thống kê đơn hàng</h4>
      <table class="formloai" style="text-align: center;">
        <tr style="background-color: teal;color:white;">
          <th style="padding:10px;">Đơn hàng chờ xác nhận</th>
          <th>Đã xác nhận</th>
          <th>Đang giao hàng</th>
          <th>Giao hàng thành công</th>
          <th>Đơn hàng đã hủy</th>
        </tr>
        <tr>
          <?php foreach ($listthongke21 as $thongke) { extract($thongke); echo '<td class="b" style=" border: 0.1px solid #d69999 !important;">' . $coutdh . '</td>';}?>
          <?php foreach ($listthongke22 as $thongke) { extract($thongke); echo '<td style=" border: 0.1px solid #d69999 !important;">' . $coutdh . '</td>';}?>
          <?php foreach ($listthongke23 as $thongke) { extract($thongke); echo '<td style=" border: 0.1px solid #d69999 !important;">' . $coutdh . '</td>';}?>
          <?php foreach ($listthongke24 as $thongke) { extract($thongke); echo '<td style=" border: 0.1px solid #d69999 !important;">' . $coutdh . '</td>';}?>
          <?php foreach ($listthongke25 as $thongke) { extract($thongke); echo '<td style=" border: 0.1px solid #d69999 !important;">' . $coutdh . '</td>';}?>
        </tr>
      </table>
    </div>
    <div class="">
      <h4 class="g">Thống kê theo danh mục</h4>
      <table class="formloai" style="text-align: center;">
        <tr style="background-color: teal;color:white;">
          <th style="padding:10px;">TÊN DANH MỤC</th>
          <th>SỐ LƯỌNG</th>
          <th>GIÁ CAO NHẤT</th>
          <th>GIÁ THẤP NHẤT</th>
          <th>GIÁ TRUNG BÌNH</th>
        </tr>
        <?php foreach($thongke2 as $list=> $tk):?>
        <tr>
          <td class="a">
            <?=$tk['tendm']?>
          </td>
          <td class="a">
            <?=$tk['countsp']?>
          </td>
          <td class="a">
            <?=number_format($tk['maxprice'], 0, ',', '.')?>₫
          </td>
          <td class="a">
            <?=number_format($tk['minprice'], 0, ',', '.')?>₫
          </td>
          <td class="a">
            <?=number_format($tk['avgprice'], 0, ',', '.')?>₫
          </td>

          <?php endforeach; ?>
        </tr>
      </table>
    </div>
  </div>
</div>
<style>
  table td {
    padding: 10px
  }

  .moi {
    margin-top: 50px;
  }

  div#bar-chart {
    left: 300px;
    position: relative;
    width: 600px;
    height: 400px;
  }

  .g {
    text-align: center;
    font-size: 30px;
    color: #cca217;
  }

  .b {
    height: 50px;
  }

  .be-content {
    height: 1700px;
  }

  .a {
    border: 0.1px solid #d69999 !important;
  }

  .formloai {
    width: 1000px;
    top: 20px;
    left: 100px;
    position: relative;

  }

  .alo {
    width: 600px;
    left: 300px;
    position: relative;
    top: 10px;
  }
  
  canvas#myChart {
    height: 444px;
    width: 688px;
  }
</style>