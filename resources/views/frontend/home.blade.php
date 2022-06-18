@extends('frontend.master')

@section('mainsection')
<div data-vide-bg="{{asset('frontend')}}/video/video">
  <div class="container">
      <div class="banner-info">
          <h3>It is a long established fact that a reader will be distracted by 
          the readable </h3>	
          <div class="search-form">
              <form action="#" method="post">
                  <input type="text" placeholder="Search..." name="Search...">
                  <input type="submit" value=" " >
              </form>
          </div>		
      </div>	
  </div>
</div>

  <script>window.jQuery || document.write('<script src="{{asset('frontend')}}/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
  <script src="{{asset('frontend')}}/js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
  <div class="container ">
      <div class="spec ">
          <h3>Featured product</h3>
          <div class="ser-t">
              <b></b>
              <span><i></i></span>
              <b class="line"></b>
          </div>
      </div>
          <div class="tab-head ">
             
              <div class=" tab-content tab-content-t ">
                  <div class="tab-pane active text-style" id="tab1">
                      <div class=" con-w3l">
                      @foreach($featured_products as $product)
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">								
                                  <a href="{{url('product-detials/'.$product->id)}}" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                      <img src="{{asset($product->image)}}" class="img-responsive" alt=""  style="  width: 150px; height: 150px  ">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="{{url('product-detials/'.$product->id)}}">{{$product->name}}</a></h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>{{$product->price}}</label><em class="item_price">{{$product->discounted_price}}</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                      <div class="add">
                                      <a href="{{url('product-detials/'.$product->id)}}">   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="1.50" data-quantity="1" data-image="{{asset('frontend')}}//of.png">view detailes</button></a>
                                      </div>
                                      
                                  </div>
                            
                              </div>
                          </div>
                          
                          @endforeach
                          <div class="clearfix"></div>
                       </div>
                  </div>
                  <div class="tab-pane  text-style" id="tab2">
                      <div class=" con-w3l">
            
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                                  <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of4.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Lays</a>(100 g)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Lays" data-summary="summary 5" data-price="0.70" data-quantity="1" data-image="{{asset('frontend')}}/images/of4.png">Add to Cart</button>
                                      </div>
                                  </div>
                                 
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                                  <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of5.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Kurkure</a>(100 g)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Kurkure" data-summary="summary 6" data-price="0.70" data-quantity="1" data-image="{{asset('frontend')}}//of5.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                                  <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of6.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Popcorn</a>(250 g)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$2.00</label><em class="item_price">$1.00</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Popcorn" data-summary="summary 7" data-price="1.00" data-quantity="1" data-image="{{asset('frontend')}}/images/of6.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                                  <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of7.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Nuts</a>(250 g)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Nuts" data-summary="summary 8" data-price="3.50" data-quantity="1" data-image="{{asset('frontend')}}/images/of7.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                       </div>		  
                  </div>
                  <div class="tab-pane  text-style" id="tab3">
                      <div class=" con-w3l">
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                              <a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
                                      <img src= "{{asset('frontend')}}/images/of8.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Banana</a>(6 pcs)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$2.00</label><em class="item_price">$1.50</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="Banana" data-summary="summary 9" data-price="1.50" data-quantity="1" data-image="{{asset('frontend')}}/images/of8.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                                  <a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of9.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Onion</a>(1 kg)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$1.00</label><em class="item_price">$0.70</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="10" data-name="Onion" data-summary="summary 10" data-price="0.70" data-quantity="1" data-image="{{asset('frontend')}}/images/of9.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                                  <a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of10.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html"> Bitter Gourd</a>(1 kg)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$2.00</label><em class="item_price">$1.00</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="Bitter Gourd" data-summary="summary 11" data-price="1.00" data-quantity="1" data-image="{{asset('frontend')}}/images/of10.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                                  <a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of11.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Apples</a>(1 kg)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="12" data-name="Apples" data-summary="summary 12" data-price="3.50" data-quantity="1" data-image="{{asset('frontend')}}/images/of11.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                       </div>		  
                  </div>
                  <div class="tab-pane text-style" id="tab4">
                          <div class=" con-w3l">
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                              <a href="#" data-toggle="modal" data-target="#myModal13" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of12.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Honey</a>(500 g)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$7.00</label><em class="item_price">$6.00</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13" data-name="Honey" data-summary="summary 13" data-price="6.00" data-quantity="1" data-image="{{asset('frontend')}}/images/of12.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m ">
                                  <a href="#" data-toggle="modal" data-target="#myModal14" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of13.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Chocos</a>(250 g)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$5.00</label><em class="item_price">$4.50</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14" data-name="Chocos" data-summary="summary 14" data-price="4.50" data-quantity="1" data-image="{{asset('frontend')}}/images/of13.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m ">
                                  <a href="#" data-toggle="modal" data-target="#myModal15" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of14.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Oats</a>(1 kg)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$4.00</label><em class="item_price">$3.50</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15" data-name="Oats" data-summary="summary 15" data-price="3.50" data-quantity="1" data-image="{{asset('frontend')}}/images/of14.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-3 m-wthree">
                              <div class="col-m">
                                  <a href="#" data-toggle="modal" data-target="#myModal16" class="offer-img">
                                      <img src="{{asset('frontend')}}/images/of15.png" class="img-responsive" alt="">
                                      <div class="offer"><p><span>Offer</span></p></div>
                                  </a>
                                  <div class="mid-1">
                                      <div class="women">
                                          <h6><a href="single.html">Bread</a>(500 g)</h6>							
                                      </div>
                                      <div class="mid-2">
                                          <p ><label>$1.00</label><em class="item_price">$0.80</em></p>
                                            <div class="block">
                                              <div class="starbox small ghosting"> </div>
                                          </div>
                                          <div class="clearfix"></div>
                                      </div>
                                          <div class="add">
                                         <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16" data-name="Bread" data-summary="summary 16" data-price="0.80" data-quantity="1" data-image="{{asset('frontend')}}/images/of15.png">Add to Cart</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                       </div>
                  </div>
              </div>
          </div>
      
  </div>
  </div>
  </div>

<!--content-->
<div class="content-mid">
  <div class="container">
      
      <div class="col-md-4 m-w3ls">
          <div class="col-md1 ">
              <a href="kitchen.html">
                  <img src="{{asset('frontend')}}/images/co1.jpg" class="{{asset('frontend')}}/img-responsive img" alt="">
                  <div class="big-sa">
                      <h6>New Collections</h6>
                      <h3>Season<span>ing </span></h3>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                  </div>
              </a>
          </div>
      </div>
      <div class="col-md-4 m-w3ls1">
          <div class="col-md ">
              <a href="hold.html">
                  <img src="{{asset('frontend')}}/images/co.jpg" class="img-responsive img" alt="">
                  <div class="big-sale">
                      <div class="big-sale1">
                          <h3>Big <span>Sale</span></h3>
                          <p>It is a long established fact that a reader </p>
                      </div>
                  </div>
              </a>
          </div>
      </div>
      <div class="col-md-4 m-w3ls">
          <div class="col-md2 ">
              <a href="kitchen.html">
                  <img src="{{asset('frontend')}}/images/co2.jpg" class="img-responsive img1" alt="">
                  <div class="big-sale2">
                      <h3>Cooking <span>Oil</span></h3>
                      <p>It is a long established fact that a reader </p>		
                  </div>
              </a>
          </div>
          <div class="col-md3 ">
              <a href="hold.html">
                  <img src="{{asset('frontend')}}/images/co3.jpg" class="img-responsive img1" alt="">
                  <div class="big-sale3">
                      <h3>Vegeta<span>bles</span></h3>
                      <p>It is a long established fact that a reader </p>
                  </div>
              </a>
          </div>
      </div>
      <div class="clearfix"></div>
  </div>
</div>
<!--content-->
<!-- Carousel
  ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <a href="kitchen.html"> <img class="first-slide" src="{{asset('frontend')}}/images/ba.jpg" alt="First slide"></a>
     
      </div>
      <div class="item">
       <a href="care.html"> <img class="second-slide " src="{{asset('frontend')}}/images/ba1.jpg" alt="Second slide"></a>
       
      </div>
      <div class="item">
        <a href="hold.html"><img class="third-slide " src="{{asset('frontend')}}/images/ba2.jpg" alt="Third slide"></a>
        
      </div>
    </div>
  
  </div><!-- /.carousel -->


                         
                         
                  
                      
                          </div>
                              
    
             
              






      <div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Latest product</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l">
                @foreach($latest_products as $product)
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="{{url('product-detials/'.$product->id)}}"  class="offer-img">
										<img src="{{asset($product->image)}}" class="img-responsive"  alt=""  style="  width: 150px; height: 150px  ">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="{{url('product-detials/'.$product->id)}}">{{$product->name}}</a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>{{$product->price}}</label><em class="item_price">{{$product->discounted_price}}</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add add-2">
                                      <a href="{{url('product-detials/'.$product->id)}}" >  <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="product 1" data-summary="summary 1" data-price="6.00" data-quantity="1" data-image="images/of16.png">View details</button></a>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
                            <div class="clearfix"></div>
						 </div>


                         </div>
	</div>



<!--footer-->

<!-- //footer-->

<!-- smooth scrolling -->
  

<!-- product -->
     
              @endsection