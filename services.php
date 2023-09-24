<?php include "./includes/header.php" ?>

<div id="pageWrapper" class="servicePage">


    <!-- Inner Banner Section -->
    <section id="innerBannerSec">
        <div class="bannerImg">
            <img src="assets/images/service-banner.png" alt="Service Banner" width="1920" height="687" class="lazy"
                loading="lazy" data-src="assets/images/service-banner.png">
        </div>
        <div class="bannerCnt">
            <div class="container">
                <div class="cnts">
                    <div class="bannerHead">Services</div>
                    <div class="bannerSubHead">Short Term Nursing Now Available at Home</div>
                    <button class="baseBtn fill" data-bs-toggle="modal" data-bs-target="#bookNowModal"><span>Book
                            Now</span></button>
                </div>
                <div class="modal fade booNowPopup" id="bookNowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="CommonFormbox">
                                    <div class="titleSec">
                                        <div class="title">Request A Quote</div>
                                        <p>Short Term Nursing Now Available at Home</p>
                                    </div>
                                    <form action="javascript:void(0);">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                            <div class="help-block d-none">Invalid Input</div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mobile">
                                            <div class="help-block d-none">Invalid Input</div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-select select" data-select2-id="select2-Service"
                                                aria-label="Default select example" id="select2Service">
                                                <option selected disabled="disabled">Select Services</option>
                                                <option value="1">India</option>
                                                <option value="2">America</option>
                                                <option value="3">England</option>
                                            </select>
                                            <div class="help-block d-none">Invalid Input</div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-select select" data-select2-id="select2-City"
                                                aria-label="Default select example" id="select2City">
                                                <option selected disabled="disabled">Select City</option>
                                                <option value="1">Kottayam</option>
                                                <option value="2">Ernakulam</option>
                                                <option value="3">Kollam</option>
                                            </select>
                                            <div class="help-block d-none">Invalid Input</div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    I authorize Thave to contact me
                                                </label>
                                            </div>
                                        </div>
                                        <button class="baseBtn fill"><span>Book Now</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner Section -->


    <!-- Services listing Section  -->
    <section id="servicelistingSec" class="BG-light">
        <div class="container">
            <div class="serviceLists">
                <div class="itm">
                    <div class="servBox">
                        <a href="serviceListing.php" class="imgSec">
                            <img src="assets/images/serv1.png" alt="Service" width="343" height="205" class="lazy"
                                loading="lazy" data-src="assets/images/serv1.png">
                        </a>
                        <div class="cntSec">
                            <a href="serviceListing.php" class="title">Long Term Nursing
                                Services</a>
                            <a href="serviceListing.php" class="subTitle">Lorem ipsum dolor sit amet, consetetur
                                sadipscing </a>
                            <button class="baseBtn" data-bs-toggle="modal" data-bs-target="#quoteModal"><span>Book
                                    Now</span></button>
                        </div>
                    </div>
                </div>
                <div class="itm">
                    <div class="servBox">
                        <a href="serviceListing.php" class="imgSec">
                            <img src="assets/images/serv2.png" alt="Service" width="343" height="205" class="lazy"
                                loading="lazy" data-src="assets/images/serv2.png">
                        </a>
                        <div class="cntSec">
                            <a href="serviceListing.php" class="title">Short term Nursing
                                Services</a>
                            <a href="serviceListing.php" class="subTitle">Lorem ipsum dolor sit amet, consetetur
                                sadipscing </a>
                            <button class="baseBtn" data-bs-toggle="modal" data-bs-target="#quoteModal"><span>Book
                                    Now</span></button>
                        </div>
                    </div>
                </div>
                <div class="itm">
                    <div class="servBox">
                        <a href="serviceListing.php" class="imgSec">
                            <img src="assets/images/serv3.png" alt="Service" width="343" height="205" class="lazy"
                                loading="lazy" data-src="assets/images/serv3.png">
                        </a>
                        <div class="cntSec">
                            <a href="serviceListing.php" class="title">Nursing Attenders</a>
                            <a href="serviceListing.php" class="subTitle">Lorem ipsum dolor sit amet, consetetur
                                sadipscing </a>
                            <button class="baseBtn" data-bs-toggle="modal" data-bs-target="#quoteModal"><span>Book
                                    Now</span></button>
                        </div>
                    </div>
                </div>
                <div class="itm">
                    <div class="servBox">
                        <a href="serviceDetail.php" class="imgSec">
                            <img src="assets/images/serv4.png" alt="Service" width="343" height="205" class="lazy"
                                loading="lazy" data-src="assets/images/serv4.png">
                        </a>
                        <div class="cntSec">
                            <a href="serviceDetail.php" class="title">Physiotherapy</a>
                            <a href="serviceDetail.php" class="subTitle">Lorem ipsum dolor sit amet, consetetur
                                sadipscing </a>
                            <button class="baseBtn" data-bs-toggle="modal" data-bs-target="#quoteModal"><span>Book
                                    Now</span></button>
                        </div>
                    </div>
                </div>
                <div class="itm">
                    <div class="servBox">
                        <a href="serviceDetail.php" class="imgSec">
                            <img src="assets/images/serv5.png" alt="Service" width="343" height="205" class="lazy"
                                loading="lazy" data-src="assets/images/serv5.png">
                        </a>
                        <div class="cntSec">
                            <a href="serviceDetail.php" class="title">Medical Equipments</a>
                            <a href="serviceDetail.php" class="subTitle">Lorem ipsum dolor sit amet, consetetur
                                sadipscing </a>
                            <button class="baseBtn" data-bs-toggle="modal" data-bs-target="#quoteModal"><span>Book
                                    Now</span></button>
                        </div>
                    </div>
                </div>
                <div class="itm">
                    <div class="servBox">
                        <a href="serviceDetail.php" class="imgSec">
                            <img src="assets/images/serv6.png" alt="Service" width="343" height="205" class="lazy"
                                loading="lazy" data-src="assets/images/serv6.png">
                        </a>
                        <div class="cntSec">
                            <a href="serviceDetail.php" class="title">Mathru Pariraksha</a>
                            <a href="serviceDetail.php" class="subTitle">Lorem ipsum dolor sit amet, consetetur
                                sadipscing </a>
                            <button class="baseBtn" data-bs-toggle="modal" data-bs-target="#quoteModal"><span>Book
                                    Now</span></button>
                        </div>
                    </div>
                </div>
                <div class="itm">
                    <div class="servBox">
                        <a href="serviceDetail.php" class="imgSec">
                            <img src="assets/images/serv7.png" alt="Service" width="343" height="205" class="lazy"
                                loading="lazy" data-src="assets/images/serv7.png">
                        </a>
                        <div class="cntSec">
                            <a href="serviceDetail.php" class="title">Locum Nurses/
                                Rapid Nurses</a>
                            <a href="serviceDetail.php" class="subTitle">Lorem ipsum dolor sit amet, consetetur
                                sadipscing </a>
                            <button class="baseBtn" data-bs-toggle="modal" data-bs-target="#quoteModal"><span>Book
                                    Now</span></button>
                        </div>
                    </div>
                </div>
                <div class="itm">
                    <div class="servBox">
                        <a href="serviceDetail.php" class="imgSec">
                            <img src="assets/images/serv8.png" alt="Service" width="343" height="205" class="lazy"
                                loading="lazy" data-src="assets/images/serv8.png">
                        </a>
                        <div class="cntSec">
                            <a href="serviceDetail.php" class="title">Recruitments</a>
                            <a href="serviceDetail.php" class="subTitle">Lorem ipsum dolor sit amet, consetetur
                                sadipscing </a>
                            <button class="baseBtn" data-bs-toggle="modal" data-bs-target="#quoteModal"><span>Book
                                    Now</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services listing Section  -->

    <!-- Rate Cards Section  -->
    <section id="rateCardSec">
        <div class="container">
            <div class="HeadingSec center">
                <div class="MainHeading">RATE CARD</div>
            </div>
            <div class="dFlxSec">
                <div class="specializeBox">
                    <div class="topSec">
                        <ul>
                            <li>Specialization</li>
                            <li>Per Visit</li>
                        </ul>
                    </div>
                    <div class="btmSec">
                        <ul>
                            <li>
                                <p>Wound Care</p>
                                <p>₹800</p>
                            </li>
                            <li>
                                <p>IV Infusion/ IV Therapy </p>
                                <p>₹700</p>
                            </li>
                            <li>
                                <p>Catheterization</p>
                                <p>₹750</p>
                            </li>
                            <li>
                                <p>Injections</p>
                                <p>₹700</p>
                            </li>
                            <li>
                                <p>Stoma Care</p>
                                <p>₹800</p>
                            </li>
                            <li>
                                <p>Vital Signs</p>
                                <p>₹650</p>
                            </li>
                            <li>
                                <p>Vaccination at Home</p>
                                <p>₹800</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="imageBox">
                    <img src="assets/images/rateCard.png" alt="Rate" width="667" height="477" class="lazy"
                        loading="lazy" data-src="assets/images/rateCard.png">
                </div>
            </div>
        </div>
    </section>
    <!-- Rate Cards Section  -->


    <!-- Benefits Section  -->
    <section id="benefitSec" class="BG-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="imgbx">
                        <img src="assets/images/benefit.png" alt="Benefits" width="658" height="645" class="lazy"
                            loading="lazy" data-src="assets/images/benefit.png">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="cntbx">
                        <div class="MainHeading">What Are The Benefits Of
                            Home Nursing Care?</div>
                        <p>The benefit of home health care is plenty. Besides being convenient than getting admitted in
                            a hospital or nursing home, the nursing care at home also helps a patient recover sooner, as
                            it has been found that people tend to recover sooner from their illness or ailments when
                            surrounded by their loved ones.</p>
                        <ul>
                            <li>It also supports diet and nutrition. Home health care nurses can be there to support the
                                patient in your absence.
                            </li>
                            <li>It brings skilled nursing care in the comfort of your home.
                            </li>
                            <li>Nursing care at home also helps in managing chronic health conditions to avoid
                                unnecessary hospitalization.
                            </li>
                            <li>Home care nursing services also help in providing recovery care at home following a
                                hospital stay for illness or injury.
                            </li>
                            <li>It offers one – on – one focus and support.
                            </li>
                            <li>Clients have better health outcomes.</li>
                            <li>It offers medication management.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benefits Section  -->


</div>

<?php include "./includes/footer.php" ?>