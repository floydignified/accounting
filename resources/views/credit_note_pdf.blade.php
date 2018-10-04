<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>{{$data[0]['title']}}</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: small;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>

  <table width="100%">
    <tr>
        <td valign="top"><h2>CREDIT NOTE</h2></td>
        <td align="right">
            <h3>SAMPLE COMPANY NAME</h3>
            <pre>
                Floyd Francis Matabilas
                Sample Company Address
                00000-000000
                09123456789
                111-111
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>From: </strong>Floyd Francis Matabilas</td>
        <td><strong>To: </strong>{{$data[0]['name']}}</td>
    </tr>

  </table>

  <br/>

<table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $key => $datum)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td scope="row">{{$datum['product_name']}}</td>
            <td>{{$datum['product_description']}}</td>
            <td align="right">{{$datum['product_quantity']}}</td>
            <td align="right"><span style='font-family: DejaVu Sans; sans-serif;'>&#8369;</span> {{number_format($datum['product_rate'],2)}}</td>
            <td align="right"><span style='font-family: DejaVu Sans; sans-serif;'>&#8369;</span> {{number_format($datum['product_total'],2)}}</td>
        </tr>
    @endforeach
      
    </tbody>

    <tfoot>
        <tr>
            <td colspan="4"></td>
            <td align="right">Total</td>
            <td align="right" class="gray"><span style='font-family: DejaVu Sans; sans-serif;'>&#8369;</span> {{number_format($data[0]['credit_total'],2)}}</td>
        </tr>
    </tfoot>
</table>

<br><br>

<h3>NOTE</h3>
<p>{{$data[0]['note']}}</p>

<br><br>

<h3>MEMO</h3>
<p>{{$data[0]['memo']}}</p>

</body>

<script>
$(document).ready(function(){
    
}); 
</script>
</html>