@extends('layouts.master')
@section('content')

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <form method="get">
                    <?php $total += $details['price'] * $details['quantity'] ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="#" width="100" height="100"
                                                                     class="img-responsive"/></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" name="quantity-{{$id}}" value="{{ $details['quantity'] }}"
                                   class="form-control quantity"/>
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-info btn-sm update-cart"><a
                                    href="{{ route('update-cart', $id)  }}"><i class="fa fa-refresh">Update</i></a>
                            </button>
                            <button class="btn btn-danger btn-sm remove-from-cart"><a
                                    href="{{ route('remove-from-cart', $id)  }}"><i class="fa fa-trash-o">Delete</i></a>
                            </button>
                        </td>
                    </tr>

                    @endforeach
                </form>
                @endif

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Total {{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ route('index')  }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                    Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
        </tr>
        </tfoot>
    </table>

@endsection
@section('scripts')
    {{--<script type="text/javascript">--}}

    {{--$(".update-cart").click(function (e) {--}}
    {{--e.preventDefault();--}}

    {{--var ele = $(this);--}}

    {{--$.ajax({--}}
    {{--url: '{{ url('update-cart') }}',--}}
    {{--method: "patch",--}}
    {{--data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},--}}
    {{--success: function (response) {--}}
    {{--window.location.reload();--}}
    {{--}--}}
    {{--});--}}
    {{--});--}}

    {{--$(".remove-from-cart").click(function (e) {--}}
    {{--e.preventDefault();--}}

    {{--var ele = $(this);--}}

    {{--if(confirm("Are you sure")) {--}}
    {{--$.ajax({--}}
    {{--url: '{{ url('remove-from-cart') }}',--}}
    {{--method: "DELETE",--}}
    {{--data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},--}}
    {{--success: function (response) {--}}
    {{--window.location.reload();--}}
    {{--}--}}
    {{--});--}}
    {{--}--}}
    {{--});--}}

    {{--</script>--}}

@endsection
