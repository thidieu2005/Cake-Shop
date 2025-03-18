<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Home | E-Shopper</title>
<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('source/assets/dest/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/dest/vendors/colorbox/example3/colorbox.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/dest/rs-plugin/css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/dest/rs-plugin/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/dest/css/animate.css') }}">
<link rel="stylesheet" title="style" href="{{ asset('source/assets/dest/css/huong-style.css') }}">
<link rel="stylesheet" href="{{ asset('source/assets/dest/css/style.css') }}">
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="{{ asset('eshopper/images/ico/favicon.ico') }}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('eshopper/images/ico/apple-touch-icon-144-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('eshopper/images/ico/apple-touch-icon-114-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('eshopper/images/ico/apple-touch-icon-72-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ asset('eshopper/images/ico/apple-touch-icon-57-precomposed.png') }}">

@extends('layouts.master')
@section('content')
<div class="space50">&nbsp;</div>
<div class="container beta-relative">
  <div class="container">
    <div class="col-12 col-md-6" style="background: red;color:white">Số sản phẩm: {{count($product)}}</div>
    <div class="col-12 col-md-6" style="background: blue;color:white">Đã bán: <br />
      <p>Tổng: {{count($product)}}</p>
      <p>Hôm nay: 1</p>
      <p>Tháng này: 3</p>
      <p>Năm nay: 4</p>
    </div>
  </div>
  <div class="pull-left">
    <h2>List</h2>
  </div>
  <div class="pull-right">
    <a href="{{route('export')}}" class="btn btn-primary">
      Xuất ra PDF
    </a>
  </div>
  <table id="table_admin_product" class="table table-striped display">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Description</th>
        <th scope="col">Unit_price</th>
        <th scope="col">Promotion_price</th>
        <th scope="col">Unit</th>
        <th scope="col">New</th>
        <th scope="col"><a href="{{route('add-product')}}" class="btn btn-primary" style="width:80px;">Add</a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($product as $product)
      <tr class="products-list-admin">
        <th scope="row">{{$product->id}}</th>
        <th><img src="source/image/product/{{$product->image}}" alt="image" style="height: 100px;" /></th>
        <td>{{$product->name}}</td>
        <td>{{$product->id_type}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->unit_price}}</td>
        <td>{{$product->promotion_price}}</td>
        <td>{{$product->unit}}</td>
        <td>{{$product->new}}</td>
        <td>
          <a href='admin-edit-form/{{$product->id}}' type="submit" class="btn btn-warning" style="width:80px;">Edit</a>
          <form role="form" action="admin-delete/{{$product->id}}" method="post">
            @csrf
            <button name="edit" type="submit" class="btn btn-danger" style="width:80px;">Delete</button>
          </form>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="space50">&nbsp;</div>
</div>
<script>
  $(document).ready(function() {
    $('#table_admin_product').DataTable();
  });
</script>
@endsection