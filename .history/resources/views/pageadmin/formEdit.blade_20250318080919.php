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
    <div class="pull-left">
        <h2>Add product</h2>
    </div>
    <div class="space50">&nbsp;</div>
    @include('error')
    <div class="container">
        <form action="admin-edit" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for='editName'>ID</label>
                <input type="number" class="form-control" name="editId" value="{{$product->id}}" readonly>
            </div>

            <div class="form-group">
                <label for='editName'>Name</label>
                <input type="text" class="form-control" name="editName" id="editName" placeholder="Enter name" value="{{$product->name}}" required>
            </div>

            <div class="form-group">
                <label for='editPrice'>Price</label>
                <input type="number" min=10000 class="form-control" name="editPrice" id="editPrice" placeholder="Enter price" value="{{$product->unit_price}}" required>
            </div>

            <div class="form-group">
                <label for='editPromotionPrice'>Promotion Price</label>
                <input type="number" min=10000 class="form-control" name="editPromotionPrice" id="editPromotionPrice" value="{{$product->promotion_price}}" placeholder="Enter promotion price">
            </div>

            <div class="form-group">
                <label for='editUnit'>Unit</label>
                <input type="text" class="form-control" name="editUnit" id="editUnit" value="{{$product->unit}}" placeholder="Enter unit" required>
            </div>

            <div class="form-group">
                <label for='editNew'>New</label>
                <input type="number" min=0 class="form-control" name="editNew" id="editNew" value="{{$product->new}}" placeholder="Enter new" required>
            </div>

            <div class="form-group">
                <label for='editType'>Type</label>
                <select class="form-control" name="editType" id="editType" required>
                    @foreach($type_products as $type)
                    <option value="{{ $type->id }}" {{ $product->id_type == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for='editImage'>Image file</label>
                <input type="file" class="form-control-file" name="editImage" id="editImage">
            </div>

            <div class="form-group">
                <img id="preview-image-before-upload" src="source/image/product/{{$product->image}}" alt="preview image" style="max-height: 250px;">
                <script type="text/javascript">
                    $(document).ready(function(e) {
                        $('#inputImage').change(function() {
                            let reader = new FileReader();
                            reader.onload = (e) => {
                                $('#preview-image-before-upload').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(this.files[0]);
                        });
                    });
                </script>
            </div>

            <div class="form-group">
                <label for='editDescription'>Description</label>
                <textarea name="editDescription" required>{{$product->description}}</textarea>
                <script>
                    CKEDITOR.replace('editDescription');
                </script>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="space50">&nbsp;</div>
</div>

@endsection