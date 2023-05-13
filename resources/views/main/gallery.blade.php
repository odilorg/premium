@extends('layout')

@section('content')
 <!-- SUB BANNER -->
 <section class="section-sub-banner bg-12">
    <div class="awe-overlay"></div>
    <div class="sub-banner">
        <div class="container">
            <div class="text text-center">
                <h2>Gallery</h2>
                <p>Lorem Ipsum is simply dummy text of the printing</p>
            </div>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->

<!-- GALLERY -->
<section class="section_page-gallery">
    <div class="container">
        <div class="gallery">

            <!-- FILTER -->
            <div class="gallery-cat text-center">
                <ul class="list-inline">
                    <li class="active"><a href="#" data-filter="*">All</a></li>
                    <li><a href="#" data-filter=".ground">HOTEL &amp; GROUND</a></li>
                    <li><a href="#" data-filter=".suite">ROOM/SUITE </a></li>
                    <li><a href="#" data-filter=".bathroom">BATHROOM</a></li>
                    <li><a href="#" data-filter=".dining">DINING</a></li>
                </ul>
            </div>
            <!-- END / FILTER -->

            <!-- GALLERY CONTENT -->
            <div class="gallery-content">
                <div class="row">
                    <div class="gallery-isotope col-4">

                        <!-- ITEM SIZE -->
                        <div class="item-size "></div>
                        <!-- END / ITEM SIZE -->

                        <!-- ITEM -->
                        <div class="item-isotope ground suite dining">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/inner-garden.jpg" class="mfp-image" title="Jahongir Premium Inner Garden">
                                    <img src="images/gallery/hotel-grounds/inner-garden.jpg" alt="">
                                </a>
                                <h6 class="text">Jahongir Premium Inner Garden</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom suite">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/inner-courtyard.jpg" class="mfp-image" title="Jahongir Premium courtyard">
                                    <img src="images/gallery/hotel-grounds/inner-courtyard.jpg" alt="">
                                </a>
                                <h6 class="text">Jahongir Premium courtyard</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom dining">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/hotel-walkway-terrace.jpg" class="mfp-image" title="Walkway terrace">
                                    <img src="images/gallery/hotel-grounds/hotel-walkway-terrace.jpg" alt="">
                                </a>
                                <h6 class="text">Walkway around the Garden </h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope suite dining ">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/deluxe-triple-room.jpg" class="mfp-image" title="Deluxe triple room">
                                    <img src="images/gallery/room-suite/deluxe-triple-room.jpg" alt="Deluxe triple room in Jahongir premium">
                                </a>
                                <h6 class="text">Deluxe triple room - ideal for family stay</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground suite dining">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/standard-double-twin-room-headboard.jpg" class="mfp-image" title="Standard double or twin room ">
                                    <img src="images/gallery/room-suite/standard-double-twin-room-headboard.jpg" alt="Standard double or twin room">
                                </a>
                                <h6 class="text">Standard double or twin room </h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground bathroom dining">
                            <div class="gallery_item">
                                <a href="https://www.youtube.com/watch?v=RnjZ6IhkR40" target="_blank" class="mfp-iframe" title="Luxury Room view all">
                                    <img src="images/gallery/page/img-6.jpg" alt="">
                                </a>
                                <span class="icon"><i class="fa lotus-icon-media-play"></i></span>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground suite dining">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/standard-double-twin-room-window.jpg" class="mfp-image" title="Standard double or twin room">
                                    <img src="images/gallery/room-suite/standard-double-twin-room-window.jpg" alt="">
                                </a>
                                <h6 class="text">Standard double or twin room</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope bathroom suite dining">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/room-bathroom-shower.jpg" class="mfp-image" title="Private Bathroom with walk-in shower">
                                    <img src="images/gallery/bathroom/room-bathroom-shower.jpg" alt="Private Bathroom with walk-in shower">
                                </a>
                                <h6 class="text">Private Bathroom with walk-in shower</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope bathroom suite dining">
                            <div class="gallery_item">
                                <a href="https://www.youtube.com/watch?v=RnjZ6IhkR40" target="_blank" class="mfp-iframe" title="Luxury Room view all">
                                    <img src="images/gallery/page/img-9.jpg" alt="">
                                </a>
                                <span class="icon"><i class="fa lotus-icon-media-play"></i></span>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope ground bathroom">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/room-bathroom-sink-mirror.jpg" class="mfp-image" title="Private Bathroom with walk-in shower">
                                    <img src="images/gallery/bathroom/room-bathroom-sink-mirror.jpg" alt="Private Bathroom sink and mirror">
                                </a>
                                <h6 class="text">Private Bathroom with walk-in shower</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom suite ">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/room-private-bathroom-walk-in-shower.jpg" target="_blank" class="mfp-image">
                                    <img src="images/gallery/bathroom/room-private-bathroom-walk-in-shower.jpg" alt="Private Bathroom with walk-in shower">
                                </a>
                                <h6 class="text">Private Bathroom with walk-in shower</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/superior-double-room-furniture.jpg" class="mfp-image" title="Superior double room furniture">
                                    <img src="images/gallery/room-suite/superior-double-room-furniture.jpg" alt="Superior double room desk, TV, luggage s">
                                </a>
                                <h6 class="text">Superior double room desk, TV, luggage stand </h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/superior-double-room.jpg" class="mfp-image" title="Superior Double room">
                                    <img src="images/gallery/room-suite/superior-double-room.jpg" alt="Superior Double room">
                                </a>
                                <h6 class="text">Superior Double room</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/breakfast-buffer-coffee-tea-bread.jpg" class="mfp-image" title="Breakfast buffet">
                                    <img src="images/gallery/breakfast/breakfast-buffer-coffee-tea-bread.jpg" alt="Breakfast buffet in Jahongir Premium">
                                </a>
                                <h6 class="text">Breakfast buffet </h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom">
                            <div class="gallery_item">
                                <a href="images/gallery/popup/breakfast-buffet-jams.jpg" class="mfp-image" title="Breakfast buffet">
                                    <img src="images/gallery/breakfast/breakfast-buffet-jams.jpg" alt="Breakfast buffet">
                                </a>
                                <h6 class="text">Breakfast buffet homemade jams </h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                        <!-- ITEM -->
                        <div class="item-isotope  ground bathroom">
                            <div class="gallery_item">
                                <a  href="images/gallery/popup/breakfast-buffet-hot-dishes.jpg" class="mfp-image" title="Breakfast buffet in Jahongir Premium hot Dishes">
                                    <img src="images/gallery/breakfast/breakfast-buffet-hot-dishes.jpg" alt="Breakfast buffet in Jahongir Premium hot Dishes">
                                </a>
                                <h6 class="text">Breakfast buffet in Jahongir Premium hot Dishes</h6>
                            </div>
                        </div>
                        <!-- END / ITEM -->

                    </div>
                </div>

            </div>
            <!-- GALLERY CONTENT -->

        </div>
    </div>       
</section>
<!-- END / GALLERY -->
<!-- END / RESTAURANTS -->
@endsection


