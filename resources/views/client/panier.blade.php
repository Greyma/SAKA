@extends('client_layout.master')
@section('title')
  panier
@endsection
@section('content')
    <!-- start panier -->
<!-- Start Cart  -->
<div class="cart-box-main">
    <br>
    <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <h6 class="text-secondary text-uppercase mb-3 text-center">Panier</h6>
            <h1 class="mb-1 text-center text-uppercase">votre panier</h1>
            <p class="text-secondary mb-5 text-center lead fs-4">voila votre panier avec le code de bare des parfums d'achats</p>
          </div>
        </div>
      </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive" >
                    <table class="table">
                        <thead>
                            <tr class="tr1">
                                <th>images</th>
                                <th>Parfum</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr class="tr1">
                                    <td class="thumbnail-img">
                                        <a href="#">
                                    <img class="img-fluid" src="https://i.pinimg.com/474x/2a/83/34/2a83346aea0a764791282add536076c8.jpg" alt="" />
                                </a>
                                    </td>
                                    <td class="name-pr">
                                        <p>bal d'afrique</p>
                                    </td>
                                    <td class="price-pr">
                                        <p>$110</p>
                                    </td>
                                    <td class="quantity-box">
                                      <form action="" method="POST">

                                        <input type="number" name="qty" size="4" value="" min="1" step="1" class="c-input-text qty text">
                                        <a class="btn btn-dark">ok</a>
                                         <br>

                                      </form>
                                    </td>
                                    <td class="total-pr">
                                        <p>$ 220</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="" class="btn btn-dark">
                                            X
                                         </a>
                                    </td>
                                </tr>


                                <tr class="tr1">
                                    <td class="thumbnail-img">
                                        <a href="#">
                                    <img class="img-fluid" src="https://i.pinimg.com/474x/fc/58/5f/fc585f7d4e7735729b9f971a0209e610.jpg" alt="" />
                                </a>
                                    </td>
                                    <td class="name-pr">
                                        <p>bal d'afrique</p>
                                    </td>
                                    <td class="price-pr">
                                        <p>$110</p>
                                    </td>
                                    <td class="quantity-box">
                                      <form action="" method="POST">
                                        <input type="number" name="qty" size="4" value="" min="0" step="1" class="c-input-text qty text">
                                        <a class="btn btn-dark">ok</a>
                                         <br>
                                      </form>
                                    </td>
                                    <td class="total-pr">
                                        <p>$ 220</p>
                                    </td>
                                    <td class="remove-pr">
                                         <a href="" class="btn btn-dark">
                                            X
                                        </a>
                                    </td>
                                </tr>



                                <tr class="tr1">
                                    <td class="thumbnail-img">
                                        <a href="#">
                                    <img class="img-fluid" src="https://i.pinimg.com/474x/d1/02/24/d1022415176f4aa2ec440d37c753e40a.jpg" alt="" />
                                </a>
                                    </td>
                                    <td class="name-pr">
                                        <p>bal d'afrique</p>
                                    </td>
                                    <td class="price-pr">
                                        <p>$110</p>
                                    </td>
                                    <td class="quantity-box">
                                      <form action="" method="POST">
                                        <input type="number" name="qty" size="4" value="" min="0" step="1" class="c-input-text qty text">
                                        <a class="btn btn-dark">ok</a>
                                         <br>
                                      </form>
                                    </td>
                                    <td class="total-pr">
                                        <p>$ 220</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="" class="btn btn-dark">
                                            X
                                        </a>
                                    </td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        &nbsp;  &nbsp;  &nbsp;
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <a class="btn btn-dark" type="submit">Update Cart</a>
                </div>
            </div>
        </div>

        <div class="row my-5" >
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12" style="background-color: white; padding: 3%;">
                <div class="order-box">
                    <h3>Order summary</h3>
                    <div class="d-flex">
                        <h4>Sub Total : </h4>
                        <div class="ml-auto font-weight-bold"> $ 130 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Discount : </h4>
                        <div class="ml-auto font-weight-bold"> $ 40 </div>
                    </div>
                    <hr class="my-1">
                    <div class="d-flex">
                        <h4>Coupon Discount :</h4>
                        <div class="ml-auto font-weight-bold"> $ 10 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Tax :</h4>
                        <div class="ml-auto font-weight-bold"> $ 2 </div>
                    </div>
                    <div class="d-flex">
                        <h4>Shipping Cost :</h4>
                        <div class="ml-auto font-weight-bold"> Free </div>
                    </div>
                    <hr>
                    <div class="d-flex gr-total">
                        <h5>Grand Total :</h5>
                        <div class="ml-auto h5"> $ 100 </div>
                    </div>
                    <hr> </div>
                    <div class="col-12 d-flex shopping-box"><a href="chekout.html" class="ml-auto btn btn-dark">Checkout</a> </div>
            </div>

        </div>

    </div>
</div>
<!-- End Cart -->
    <!-- end panier -->
@endsection

