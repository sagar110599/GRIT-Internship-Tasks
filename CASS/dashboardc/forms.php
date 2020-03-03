<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("../includes/leftnavbar.php");
 ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">



        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>

                    <form method="POST" id="sfrA_sys" action="sfrA_sys.php" onsubmit="return confirm('Do you want to submit the form for review?');">
>

                        <!-- Form Tab  -->




                        <div class="template-demo">


                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-stepone" data-toggle="tab"
                                        href="#nav-step1" role="tab" aria-controls="nav-step1" aria-selected="true">Step
                                        1 : A</a>
                                    <a class="nav-item nav-link disabled" id="nav-steptwo" role="tab" aria-controls="nav-step2" aria-selected="false">Step 2 : A</a>
                                    <a class="nav-item nav-link disabled" id="nav-stepthree" role="tab" aria-controls="nav-step3" aria-selected="false">Step 3 : A</a>
                                    <a class="nav-item nav-link disabled" id="nav-stepfour" role="tab" aria-controls="nav-step4" aria-selected="false">Step 4 : A</a>
                                    <a class="nav-item nav-link disabled" id="nav-stepfive" role="tab" aria-controls="nav-step5" aria-selected="false">Step 5 : B</a>
                                    <a class="nav-item nav-link disabled" id="nav-stepsix" role="tab" aria-controls="nav-step6" aria-selected="false" data-toggle="tab" href="#nav-step6">Step 6 : B</a>
                                     <a class="nav-item nav-link disabled" id="nav-stepseven" role="tab" aria-controls="nav-step7" aria-selected="false" data-toggle="tab" href="#nav-step7">Step 7 : B</a>
                                    <a class="nav-item nav-link disabled" id="nav-stepeight" role="tab" aria-controls="nav-step8" aria-selected="false" data-toggle="tab" href="#nav-step8">Step 8 : B</a>
                                    <a class="nav-item nav-link disabled" id="nav-stepnine" role="tab" aria-controls="nav-step9" aria-selected="false" data-toggle="tab" href="#nav-step9">Step 9 : B</a>

                                </div>
                            </nav>
                            <div class="mt-4"></div>

                        </div>

                        <!-- end Form Tab  -->



                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-step1" role="tabpanel"
                                aria-labelledby="nav-step1-tab">
                                <!-- Step 1  -->
                                <div class="form-group">
                                      <label for="exampleFormControlSelect3">Select Year</label>
                                      <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>
                                <p class="card-description">Part A : General Information </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="faculty_name" id="faculty_name" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Emp. Code</label>
                                            <div class="col-sm-9">
                                                <input type="text" "ecode" id="ecode" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Persent</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" name="praddr" id="praddr" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Permanent</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" name="peaddr" id="peaddr" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email"name="email" id="email" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Mobile No.</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="mobileno" id="mobileno" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Highest Qualification</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="highq" id="highq" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="dob" id="dob" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-success" id="step1-btn">Next</button>


                                
                            </div> <!-- Step 1 end-->
                            <div class="tab-pane fade" id="nav-step2" role="tabpanel" aria-labelledby="nav-step2-tab">

                                <!-- Step 2-->

                                <p class="card-description"> Details of last service i.e before joining KJSCE </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="desi" id="desi" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Name of Organization</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="nameo" id="nameo" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="card-description"> Details of service in KJSCE </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Present Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="pdesi" id="pdesi"  class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">DOJ KJSCE</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="dojkjsce" id="dojkjsce" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Present Scale</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="pscale" id="pscale"  class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Present basic and grade pay</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="pbg" id="pbg"  class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                 <p class="card-description"> Details of last promotion by selection </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="lastdesisel" id="lastdesisel" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Promotion w.e.f</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="promowef" id="promowef"  class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Changed Scale</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="cscales" id="cscales class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Changed basic and grade pay</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="cbasics" id="cbasics" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="card-description"> Details of last promotion through CAS </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="lastdesicas" id="lastdesicas" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Promotion w.e.f</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="promowefcas" id="promowefcas" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Changed Scale</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="cscalecas" id="cscalecas" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Changed basic and grade pay</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="cbasiccas" id="cbasiccas" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step2-back">Back</button>
                                <button type="button" class="btn btn-gradient-success" id="step2-btn">Next</button>

                                <!-- Step 2 end-->
                            </div>
                            <div class="tab-pane fade" id="nav-step3" role="tabpanel" aria-labelledby="nav-step3-tab">
                                <!-- Step 3-->
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Whether acquired any fresh
                                                educational qualification during said academic year?</label>
                                            <div class="col-sm-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            
id="customRadioInline1" name="customRadioInline1" value=""
                                                            checked> Yes </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            id="customRadioInline2" name="customRadioInline1"
                                                            value="option2"> No </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check">
                                                    <label class="form-check-label"> if yes: 20 PI </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="card-description"> If yes, details of qualification </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Name of Degree</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Institute</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="card-description"> * 20 PI for Ph.D and M.Phil.<br>
                                    * 10 PI for other UG/PG Degree/Diploma/Certificate Courses </p>
                                <h6 class="text-dark">GPI</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Self</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">H.O.D</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Committee</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step3-back">Back</button>
                                <button type="button" class="btn btn-gradient-success" id="step3-btn">Next</button>

                                <!-- Step 3 end-->
                            </div>
                            <div class="tab-pane fade" id="nav-step4" role="tabpanel" aria-labelledby="nav-step4-tab">
                                <!-- Step 4-->

                                 <div class="row">
                                    <div class="col-md-12">

                                        <p class="card-description">Details of Course | Summer School | STTP | Online
                                            Course Attended | Completed | Organised during academic year</p>
                                        <div class="control-group after-add-more" style="margin-top:10px">

                                            <button class="btn btn-gradient-success add-more" type="button"><i
                                                    class="mdi mdi-plus"></i>Add </button>
                                        </div>





                                        <div class="copy hide">
                                            <div class="control-group input-group" style="margin-top:10px">
                                                <input type="text" id="srno1" name="srno[]" value="" data-toggle="tooltip" title="SrNo." placeholder="Sr.no" class="form-control">
                                                <input type="text" id="course1" name="course[]" value="" data-toggle="tooltip" title="Name of summer School/Course" maxlength="100" placeholder="Name of summer School/Course" class="form-control">
                                                <input type="text" id="days1" name="days[]" value="" data-toggle="tooltip" title="Duration(Days)" placeholder="Duration(Days)" class="form-control">
                                                <input type="text" id="agency1" name="agency[]" value="" data-toggle="tooltip" title="Organising Agency" placeholder="Organising Agency"class="form-control">
                                                <input type="text" id="rolee1" name="rolee[]" value="" data-toggle="tooltip" title="If organised in KJSCE, mention the role played" placeholder="If organised in KJSCE, mention the role played" class="form-control">
                                                <input type="file" name="img[]" class="form-control" id="upload1" />
                                            <div class="input-group-btn">
                                                    <button class="btn btn-gradient-danger btn-icon remove"
                                                        type="button"><i class="mdi mdi-minus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- row end -->

                                <hr>
                                 <p class="card-description mt-4">Three GPI per day but maximum 30</p>

                                 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        
                                        <label class="col-sm-3 col-form-label">Self</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">H.O.D</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                  </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Committee</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <p class="card-description mt-4">PI Part A : GPI out of 50</p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                
                                                <label class="col-sm-3 col-form-label">Self</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">H.O.D</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Committee</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               

                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step4-back">Back</button>
                                <button type="button" class="btn btn-gradient-success" id="step4-btn">Next</button>

                                <!-- Step 4 end-->
                            </div>
                            <!-- part B-->
                            <div class="tab-pane fade" id="nav-step5" role="tabpanel" aria-labelledby="nav-step5-tab">
                                <!-- Step 5-->

                                  <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="text-dark">Part B : Category 1 : Teaching and Learning (Max. PI=100)</h6>
                                        <p class="card-description">Courses Taught (Max. PI: 40)<br><h6 class="text-dark">Odd Semester Details</h6></p>
                                       
                                       
                                    


      <table class="table table-bordered table-responsive table-sm" id="tbl_posts">
        <thead>
          <tr>
                                              <th> Sr No. </th>
                                              <th> Course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Type L/P/T &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> UG/PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Class/Semester &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Hrs./Week &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Total no. of Hours engaged(A) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> * Max. Hrs.(B)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> C=(A/B)*100 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Student Feedback For Theory &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
          </tr>
        </thead>
        <tbody id="tbl_posts_body">
          <tr id="rec-1">
            <td><span class="sn">1</span>.</td>
            <td> <input type="text" name='ctocourse[]' id="ctocourse1"  value="" data-toggle="tooltip" title="Course" placeholder="Course" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" data-toggle="tooltip" title="Type L/P/T" placeholder="Type L/P/T" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" data-toggle="tooltip" title="UG/PG" placeholder="UG/PG" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctoclasssemester[]' id="ctoclasssemester1"  value="" data-toggle="tooltip" title="Class/Semester" placeholder="Class/Semester" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctohrsweek[]' id="ctohrsweek1" value="" data-toggle="tooltip" title="Hrs./Week" placeholder="Hrs./Week" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctohrsengaged[]' id="ctohrsengaged1"  value="" data-toggle="tooltip" title="Total no. of Hours engaged(A)" placeholder="Total no. of Hours engaged(A)" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctomaxhrs[]' id="ctomaxhrs1" value="" data-toggle="tooltip" title="* Max. Hrs.(B)" placeholder="* Max. Hrs.(B)" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctoc[]' id="ctoc1"  value="" data-toggle="tooltip" title="C=(A/B)*100" placeholder="C=(A/B)*100" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctofbk[]' id='ctofbk1' value="" data-toggle="tooltip" title="Student Feedback For Theory" placeholder="Student Feedback For Theory" class="form-control form-control-sm"></td>

            <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

            <td><a class="btn btn-xs delete-record" data-id="1"><i class="mdi mdi-delete"></i></a></td>

          </tr>
        
        </tbody>

      </table>

       <div class="well clearfix"><br>
        <a class="btn btn-gradient-success add-record" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
       </div>
    </div> 
            <div class="hide">
            <table id="sample_table">
            <tr id="">
            <td><span class="sn">1</span>.</td>
            <td> <input type="text" name='ctocourse[]' id="ctocourse1"  value="" data-toggle="tooltip" title="Course" placeholder="Course" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" data-toggle="tooltip" title="Type L/P/T" placeholder="Type L/P/T" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" data-toggle="tooltip" title="UG/PG" placeholder="UG/PG" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctoclasssemester[]' id="ctoclasssemester1"  value="" data-toggle="tooltip" title="Class/Semester" placeholder="Class/Semester" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctohrsweek[]' id="ctohrsweek1" value="" data-toggle="tooltip" title="Hrs./Week" placeholder="Hrs./Week" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctohrsengaged[]' id="ctohrsengaged1"  value="" data-toggle="tooltip" title="Total no. of Hours engaged(A)" placeholder="Total no. of Hours engaged(A)" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctomaxhrs[]' id="ctomaxhrs1" value="" data-toggle="tooltip" title="* Max. Hrs.(B)" placeholder="* Max. Hrs.(B)" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctoc[]' id="ctoc1"  value="" data-toggle="tooltip" title="C=(A/B)*100" placeholder="C=(A/B)*100" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctofbk[]' id='ctofbk1' value="" data-toggle="tooltip" title="Student Feedback For Theory" placeholder="Student Feedback For Theory" class="form-control form-control-sm"></td>

            <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

            <td><a class="btn btn-xs delete-record" data-id="1"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            </table>
            </div>


       
                                     
                                </div><!-- row end -->


                                <hr>

                                 <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="text-dark"><br>Even Semester Details<br><br></h6>
                                    
                                       
                                       
                                    


      <table class="table table-bordered table-responsive table-sm" id="tbl_posts1">
        <thead>
          <tr>
                                              <th> Sr No. </th>
                                              <th> Course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Type L/P/T &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> UG/PG &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Class/Semester &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Hrs./Week &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Total no. of Hours engaged(A) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> * Max. Hrs.(B)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> C=(A/B)*100 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Student Feedback For Theory &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
          </tr>
        </thead>
        <tbody id="tbl_posts_body1">
          <tr id="rec1-1">
            <td><span class="sn">1</span>.</td>
            <td> <input type="text" name='ctocourse[]' id="ctocourse1"  value="" data-toggle="tooltip" title="Course" placeholder="Course" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" data-toggle="tooltip" title="Type L/P/T" placeholder="Type L/P/T" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" data-toggle="tooltip" title="UG/PG" placeholder="UG/PG" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctoclasssemester[]' id="ctoclasssemester1"  value="" data-toggle="tooltip" title="Class/Semester" placeholder="Class/Semester" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctohrsweek[]' id="ctohrsweek1" value="" data-toggle="tooltip" title="Hrs./Week" placeholder="Hrs./Week" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctohrsengaged[]' id="ctohrsengaged1"  value="" data-toggle="tooltip" title="Total no. of Hours engaged(A)" placeholder="Total no. of Hours engaged(A)" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctomaxhrs[]' id="ctomaxhrs1" value="" data-toggle="tooltip" title="* Max. Hrs.(B)" placeholder="* Max. Hrs.(B)" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctoc[]' id="ctoc1"  value="" data-toggle="tooltip" title="C=(A/B)*100" placeholder="C=(A/B)*100" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctofbk[]' id='ctofbk1' value="" data-toggle="tooltip" title="Student Feedback For Theory" placeholder="Student Feedback For Theory" class="form-control form-control-sm"></td>

            <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

            <td><a class="btn btn-xs delete-record1" data-id="1"><i class="mdi mdi-delete"></i></a></td>

          </tr>
        
        </tbody>

      </table>

       <div class="well clearfix"><br>
        <a class="btn btn-gradient-success add-record1" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
       </div>
    </div> 
            <div class="hide">
            <table id="sample_table1">
            <tr id="">
            <td><span class="sn">1</span>.</td>
            <td> <input type="text" name='ctocourse[]' id="ctocourse1"  value="" data-toggle="tooltip" title="Course" placeholder="Course" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" data-toggle="tooltip" title="Type L/P/T" placeholder="Type L/P/T" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" data-toggle="tooltip" title="UG/PG" placeholder="UG/PG" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctoclasssemester[]' id="ctoclasssemester1"  value="" data-toggle="tooltip" title="Class/Semester" placeholder="Class/Semester" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctohrsweek[]' id="ctohrsweek1" value="" data-toggle="tooltip" title="Hrs./Week" placeholder="Hrs./Week" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctohrsengaged[]' id="ctohrsengaged1"  value="" data-toggle="tooltip" title="Total no. of Hours engaged(A)" placeholder="Total no. of Hours engaged(A)" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctomaxhrs[]' id="ctomaxhrs1" value="" data-toggle="tooltip" title="* Max. Hrs.(B)" placeholder="* Max. Hrs.(B)" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctoc[]' id="ctoc1"  value="" data-toggle="tooltip" title="C=(A/B)*100" placeholder="C=(A/B)*100" class="form-control form-control-sm"></td>

            <td> <input type="text" name='ctofbk[]' id='ctofbk1' value="" data-toggle="tooltip" title="Student Feedback For Theory" placeholder="Student Feedback For Theory" class="form-control form-control-sm"></td>

            <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

            <td><a class="btn btn-xs delete-record" data-id="1"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            </table>
            </div>


       
                                     
                                </div><!-- row end -->


                             

                                 <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group row">
                                        
                                  <label class="col-sm-12 col-form-label">*Max hours(B)=(Hrs./week)*(15)</label>
                                        <div class="">
                                           <h6 class="text-dark"></h6>
                                          
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Average of C(AVC)</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Total of C</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                                  <p class="card-description">PI 1 out of 50</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Self</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">H.O.D</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label">Committee</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                    <blockquote class="blockquote">
                      <p class="mb-0">Classes Taken (Max.40 for 90%-100% performance, and proportionate score upto 75% performance below which no score may be given.</p>
                      <p class="mb-0">* If (AVC)*100 is 90%-100% then PI 1=40</p>
                       <p class="mb-0">* If (AVC)*100>75% then PI 1=((AVC)*40)</p>
                        <p class="mb-0">* If (AVC)*100 < 75 then PI 1=0)</p>

                             </blockquote>
                             <hr>
                                <h6 class="text-dark">Examination Duties Assigned and Performed (Max. PI: 40)<br></h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                          <button class="btn btn-outline-primary mb-4" type="button" data-toggle="collapse" data-target="#oddsem" aria-expanded="false" aria-controls="collapseExample">Odd Semester</button>
                                            <button class="btn btn-outline-info mb-4" type="button" data-toggle="collapse" data-target="#evensem" aria-expanded="false" aria-controls="collapseExample">Even Semester</button>
                                        
             <div class="collapse" id="oddsem">
                                              
                <table class="table table-bordered table-responsive" id="">
                     <h6>Odd Semester</h6>
                        <thead>
                         <tr>
                          <th> Sr No. </th>
                          <th> Type of Examination Duties </th>
                          <th> Description of Duties Assigned<br>(If duties not assigned then not to be taken into account)</th>
                          <th> Extent to which carried out (%) <br>(Max.100%) (A) </th>
                           <th> Attachment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                         </tr>
                         </thead>
                        <tbody>
                          <tr>
                            <td><span class="sn">1</span></td>
                            <td><span class="sn">Paper setting Test 1</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                            <tr>
                            <td><span class="sn">2</span></td>
                            <td><span class="sn">Paper setting Test 2</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control"></td>
                          </tr>

                           <tr>
                            <td><span class="sn">3</span></td>
                            <td><span class="sn">Test 1 invigilation</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">4</span></td>
                            <td><span class="sn">Test 2 invigilation</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                           <tr>
                            <td><span class="sn">5</span></td>
                            <td><span class="sn">Test 1 paper assessment</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">6</span></td>
                            <td><span class="sn">Test 2 paper assessment</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">7</span></td>
                            <td><span class="sn">ESE Supervisor</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                           <tr>
                            <td><span class="sn">8</span></td>
                            <td><span class="sn">ESE paper setting</span></td>
                            
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                            
                          </tr>

                          <tr>
                            <td><span class="sn">9</span></td>
                            <td><span class="sn">ESE invigilation/Squad team member</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                            <tr>
                            <td><span class="sn">10</span></td>
                            <td><span class="sn">ESE Theory paper assessment</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">11</span></td>
                            <td><span class="sn">ESE Practical/oral examination</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                           <tr>
                            <td><span class="sn">12</span></td>
                            <td><span class="sn">ESE re-assessment</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">13</span></td>
                            <td><span class="sn">Proof reading</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                            <tr>
                            <td><span class="sn">14</span></td>
                            <td><span class="sn">Open day</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                        
                        </tbody>

                      </table>
                      <br>
                    </div>

                        <div class="collapse" id="evensem">
                                              
                            <table class="table table-bordered table-responsive" id="">
                                <h6>Even Semester</h6>
                            <thead>
                         <tr>
                          <th> Sr No. </th>
                          <th> Type of Examination Duties </th>
                          <th> Description of Duties Assigned<br>(If duties not assigned then not to be taken into account)</th>
                          <th> Extent to which carried out (%) <br>(Max.100%) (A) </th>
                           <th> Attachment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                         </tr>
                         </thead>
                        <tbody>
                          <tr>
                            <td><span class="sn">1</span></td>
                            <td><span class="sn">Paper setting Test 1</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                            <tr>
                            <td><span class="sn">2</span></td>
                            <td><span class="sn">Paper setting Test 2</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control"></td>
                          </tr>

                           <tr>
                            <td><span class="sn">3</span></td>
                            <td><span class="sn">Test 1 invigilation</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">4</span></td>
                            <td><span class="sn">Test 2 invigilation</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                           <tr>
                            <td><span class="sn">5</span></td>
                            <td><span class="sn">Test 1 paper assessment</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">6</span></td>
                            <td><span class="sn">Test 2 paper assessment</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">7</span></td>
                            <td><span class="sn">ESE Supervisor</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                           <tr>
                            <td><span class="sn">8</span></td>
                            <td><span class="sn">ESE paper setting</span></td>
                            
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                            
                          </tr>

                          <tr>
                            <td><span class="sn">9</span></td>
                            <td><span class="sn">ESE invigilation/Squad team member</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                            <tr>
                            <td><span class="sn">10</span></td>
                            <td><span class="sn">ESE Theory paper assessment</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">11</span></td>
                            <td><span class="sn">ESE Practical/oral examination</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                           <tr>
                            <td><span class="sn">12</span></td>
                            <td><span class="sn">ESE re-assessment</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                          <tr>
                            <td><span class="sn">13</span></td>
                            <td><span class="sn">Proof reading</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                            <tr>
                            <td><span class="sn">14</span></td>
                            <td><span class="sn">Open day</span></td>
                            <td> <input type="text" name='ctotyprlpt[]' id="ctotyprlpt1"  value="" placeholder="" class="form-control form-control-sm"></td>
                            <td> <input type="text" name='ctougpg[]' id="ctougpg1"  value="" placeholder="" class="form-control form-control-sm"></td>
                          </tr>

                                
                                </tbody> 
                            </table>
                            <br>
                            </div>
                            </div>
                            </div>


                               

                                 <div class="row">
                                <div class="col-md-3">  
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Average of A in % : </label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                </div>
                                  </div>
                                    <hr>
                                    <p class="card-description mt-4">PI2 = (Average A in % * 40)/100 out of 50</p>   
                                <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Self</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">H.O.D</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label">Committee</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                  </div><!-- end row -->

                               
                                    <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                    <button type="button" class="btn btn-gradient-dark mr-2" id="step5-back">Back</button>
                                    <button type="button" class="btn btn-gradient-success" id="step5-btn">Next</button>
                            </div>

                           

                            <!-- Step 5 end-->

                            
                       
                              <div class="tab-pane fade" id="nav-step6" role="tabpanel" aria-labelledby="nav-step6-tab">
                                <!-- Step 6-->

                                     <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="text-dark">Details of additional resource provided to the students to enrich course content/syllabus (Max. PI=10)</h6>
                                    
                                       
                                      <table class="table table-bordered table-responsive" id="tbl_posts2">
                                        <thead>
                                          <tr>
                                        <th> Sr No. </th>
                                              <th> Details of Course &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Enrichment in Content &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body2">
                                              <tr id="rec2-1">
                                                <td><span class="sn">1</span>.</td>

                                                <td> <input type="text" name='' id=""  value="" class="form-control form-control-sm"></td>

                                                <td> <input type="text" name='' id='' value="" class="form-control form-control-sm"></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="" name="" /></td>

                                                <td><a class="btn btn-xs delete-record2" data-id="1"><i class="mdi mdi-delete"></i></a></td>

                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix mb-4"><br>
                                            <a class="btn btn-gradient-success add-record2" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                        </div> 
                                                <div class="hide">
                                                <table id="sample_table2">
                                                <tr id="">
                                                <td><span class="sn">1</span>.</td>

                                                <td> <input type="text" name='' id=""  value="" class="form-control form-control-sm"></td>

                                                <td> <input type="text" name='' id='' value="" class="form-control form-control-sm"></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="" name="" /></td>

                                                <td><a class="btn btn-xs delete-record2" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>


       
                                     
                                </div><!-- row end -->
                                <hr>
                                <p class="card-description"> * 2 marks for each compliance <br> <h6 class="text-dark">PI 3 out of 10</h6></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                
                                <div class="row">
                                    <div class="col-md-12">

                                         <table class="table table-bordered table-responsive" id="">
                                <h6>Even Semester</h6>
                            <thead>
                         <tr>
                          <th> Sr No. </th>
                          <th> Use of Participatory and innovative Teaching-Learning <br>Methodologies(Max. PI=10) </th>
                          <th> Description</th>
                           <th> Attachment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                         </tr>
                         </thead>
                        <tbody>
                          <tr>
                            <td><span class="sn">1</span></td>
                            <td><span class="sn">Problem based learning, case studies,group discussions,<br> activity based learning etc.</span></td>
                            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>
                             <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                          </tr>

                            <tr>
                            <td><span class="sn">2</span></td>
                            <td><span class="sn">Use of ICT in T/L process with computer-aided <br>methods like PowerPoint / Multimedia / Simulation <br>/ Software etc. Use of anyone of these in <br>addition to Chalk and Board</span></td>
                            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>
                             <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                          </tr>

                           <tr>
                            <td><span class="sn">3</span></td>
                            <td><span class="sn">Developing and imparting Remedial / Bridge <br>Courses</span></td>
                            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>
                            <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                          </tr>

                          <tr>
                            <td><span class="sn">4</span></td>
                            <td><span class="sn">Developing and imparting soft skills / <br>communication skills / personality / development <br>courses / modules</span></td>
                            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>
                            <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                          </tr>

                           <tr>
                            <td><span class="sn">5</span></td>
                            <td><span class="sn">Developing and imparting specialized teaching-learning <br>programmes in physical education, library; <br>innovative compositions and creations in music, <br>performing and visual arts and other <br>tradition areas</span></td>
                            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>
                            <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                          </tr>

                          <tr>
                            <td><span class="sn">6</span></td>
                            <td><span class="sn">Audit courses taken (given name/semester/term)</span></td>
                            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>
                           <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                          </tr>

                          <tr>
                            <td><span class="sn">7</span></td>
                            <td><span class="sn">Other</span></td>
                            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>
                            <td> <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                          </tr>

                          

                                
                                </tbody> 
                            </table>
                            <br>
                                        
                                    </div>

                                   

                                </div>
                                <hr>
                                <p class="card-description"> * 2 marks for each compliance <br> <h6 class="text-dark">PI 4 out of 10</h6></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
               
                      <p class="text-dark">Teaching and Learning Total = PI1 + PI2 + PI3 + PI4 = out of 100.</p>
                         <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                                   
                                    <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                    <button type="button" class="btn btn-gradient-dark mr-2" id="step6-back">Back</button>
                                    <button type="button" class="btn btn-gradient-success" id="step6-btn">Next</button>
                            </div>    <!-- Step 6 end-->

                           

                            <div class="tab-pane fade" id="nav-step7" role="tabpanel" aria-labelledby="nav-step7-tab">

                                <!-- Step 7-->

                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="text-dark"> Part B : Category II: Co-curricular and administrative activities done in college (Max. PI=100)</h6>
                                        <p class="card-description"><h6 class="text-dark">Administrative Post</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts3">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Holding administrative post&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Role &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body3">
                                              <tr id="rec3-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="HOD/Dean/Vice-Principal/Associate HOD/Type of Activity" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record3" data-id="1"><i class="mdi mdi-delete"></i></a></td>

                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record3" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table3">
                                                <tr id="">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="HOD/Dean/Vice-Principal/Associate HOD/Type of Activity" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record3" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* For HOD/Dean/Vice Principal 40 PI</p>
                                      <p class="mb-0">* For Associate HOD/NBA & NAAC co-ordinator/IQAC co-ordinator/Purchase Committee member 20 PI</p>
                                      <p class="mb-0">* PII 1</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                    <p class="card-description"><h6 class="text-dark">Activities</h6></p>
                    <div class="row"> 
                     <div class="col-md-12">               
                      <table class="table table-bordered table-responsive table-sm" id="tbl_posts4">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th>Type of Activity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Role &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body4">
                                              <tr id="rec4-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Extension, Co-Curricular and Field based activities / internships in college" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record4" data-id="1"><i class="mdi mdi-delete"></i></a></td>

                                              </tr>
                                            
                                            </tbody>
                    </table>

                <div class="well clearfix"><br>
                <a class="btn btn-gradient-success add-record4" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                </div>
            </div> 
            <div class="hide">
            <table id="sample_table4">
            <tr id="">
            <td><span class="sn">1</span>.</td>
            <td> <textarea name='' id=""  value="" placeholder="Extension, Co-Curricular and Field based activities / internships in college" class="form-control"></textarea></td>
            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>

            <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

            <td><a class="btn btn-xs delete-record4" data-id="1"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            </table>

            </div>

                    
       
                                     
    </div><!-- row end -->
                                <hr>

                                      <p class="mt-4">* 5 Marks for each compliance. Max.20 <br>
                                      * PII 2</p>


                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                    <div class="row"> 
                     <div class="col-md-12">               
                      <table class="table table-bordered table-responsive table-sm" id="tbl_posts5">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th>Type of Activity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Role &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body5">
                                              <tr id="rec5-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Extra-curricular and social activities in college" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record5" data-id="1"><i class="mdi mdi-delete"></i></a></td>

                                              </tr>
                                            
                                            </tbody>
                    </table>

                <div class="well clearfix"><br>
                <a class="btn btn-gradient-success add-record5" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                </div>
            </div> 
            <div class="hide">
            <table id="sample_table5">
            <tr id="">
            <td><span class="sn">1</span>.</td>
            <td> <textarea name='' id=""  value="" placeholder="Extra-curricular and social activities in college" class="form-control"></textarea></td>
            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>

            <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

            <td><a class="btn btn-xs delete-record5" data-id="1"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            </table>

            </div>

                    
       
                                     
    </div><!-- row end -->
                                <hr>

                                      <p class="mt-4">* 5 Marks for each compliance. Max.20 <br>
                                      * PII 3</p>


                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  
                  <hr>
                    <div class="row"> 
                     <div class="col-md-12">               
                      <table class="table table-bordered table-responsive table-sm" id="tbl_posts6">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th>Type of Activity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Role &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body6">
                                              <tr id="rec6-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Extra-curricular and social activities in college" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record6" data-id="1"><i class="mdi mdi-delete"></i></a></td>

                                              </tr>
                                            
                                            </tbody>
                    </table>

                <div class="well clearfix"><br>
                <a class="btn btn-gradient-success add-record6" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                </div>
            </div> 
            <div class="hide">
            <table id="sample_table6">
            <tr id="">
            <td><span class="sn">1</span>.</td>
            <td> <textarea name='' id=""  value="" placeholder="Extra-curricular and social activities in college" class="form-control"></textarea></td>
            <td> <textarea name='' id=""  value="" placeholder="" class="form-control"></textarea></td>

            <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

            <td><a class="btn btn-xs delete-record6" data-id="1"><i class="mdi mdi-delete"></i></a></td>
            </tr>
            </table>

            </div>

                    
       
                                     
    </div><!-- row end -->
                                <hr>

                                      <p class="mt-4">* 5 Marks for each compliance. Max.20 <br>
                                      * PII 4</p>


                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  
                                 <hr>
               
                      <p class="text-dark">Co-Curricular and administrative activities Total = PII1 + PII2 + PII3 + PII4 =  out of 100</p>
                         <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step7-back">Back</button>
                                <button type="button" class="btn btn-gradient-success" id="step7-btn">Next</button>

                            </div>   <!-- Step 7 end-->

                             <div class="tab-pane fade" id="nav-step8" role="tabpanel" aria-labelledby="nav-step8-tab">

                                <!-- Step 8-->

                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="text-dark"> Part B : Category III : Publication, research/thesis supervisor,project guide,research,consultancy and intellectual properties (Max.PI=175)</h6>

                                        <p class="card-description"><h6 class="text-dark">Published Papers In Peer Reviewed Journals (Max. PI=20)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts7">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Title with Page no &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Name of peer review Journals (not online journals)
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>ISSN/ISBN No.
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                               <th>Impact factor
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Whether you are main author
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>No. of co-author
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body7">
                                              <tr id="rec7-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title with page no" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Name of peer review Journals (not online journals)" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="ISSN/ISBN No." class="form-control"></textarea></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Impact factor" class="form-control"></td>
                                                <td><div class="form-group row">
                                                 <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="radio-1" id="membershipRadios1" value="" checked> Yes </label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="radio-1" id="membershipRadios2" value="option2"> No </label>
                                                  </div>
                                                </div>
                                              </div></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of co-author" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record7" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record7" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table7">
                                                <tr id="">
                                                  <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title with page no" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Name of peer review Journals (not online journals)" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="ISSN/ISBN No." class="form-control"></textarea></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Impact factor" class="form-control"></td>
                                                <td><div class="form-group row">
                                                 <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="" id="membershipRadios1" value="" checked> Yes </label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="" id="membershipRadios2" value="option2"> No </label>
                                                  </div>
                                                </div>
                                              </div></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of co-author" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record7" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 20 marks for peer review journal first author</p>
                                      <p class="mb-0">* 10 marks for second author</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Published Papers in International/National Conference Abroad (Max.PI=15)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts8">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Title with Page no &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Name of International Conference held Abroad
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>ISSN/ISBN No.
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                               <th>Impact factor
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Whether you are main author
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>No. of co-author
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body8">
                                              <tr id="rec8-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title with page no" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Name of International Conference held Abroad" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="ISSN/ISBN No." class="form-control"></textarea></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Impact factor" class="form-control"></td>
                                                <td><div class="form-group row">
                                                 <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="radio1" id="membershipRadios3" value="" checked> Yes </label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="radio1" id="membershipRadios4" value="option2"> No </label>
                                                  </div>
                                                </div>
                                              </div></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of co-author" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record8" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record8" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table8">
                                                <tr id="">
                                                  <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title with page no" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Name of International Conference held Abroad" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="ISSN/ISBN No." class="form-control"></textarea></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Impact factor" class="form-control"></td>
                                                <td><div class="form-group row">
                                                 <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="" id="membershipRadios3" value="" checked> Yes </label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="" id="membershipRadios4" value="option2"> No </label>
                                                  </div>
                                                </div>
                                              </div></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of co-author" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record8" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 15 marks for International conference for first author</p>
                                      <p class="mb-0">* 08 marks for second author</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>


                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Published Papers in International/National Conference in India (Max.PI=10)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts9">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Title with Page no &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Name of International Conference held in India
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>ISSN/ISBN No.
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                               <th>Impact factor
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Whether you are main author
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>No. of co-author
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body9">
                                              <tr id="rec9-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title with page no" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Name of International Conference held in India" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="ISSN/ISBN No." class="form-control"></textarea></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Impact factor" class="form-control"></td>
                                                <td><div class="form-group row">
                                                 <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="radio9-1" id="membershipRadios5" value="" checked> Yes </label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="radio9-1" id="membershipRadios6" value="option2"> No </label>
                                                  </div>
                                                </div>
                                              </div></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of co-author" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record9" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record9" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table9">
                                                <tr id="">
                                                  <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title with page no" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Name of International Conference held in India" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="ISSN/ISBN No." class="form-control"></textarea></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Impact factor" class="form-control"></td>
                                                <td><div class="form-group row">
                                                 <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="" id="membershipRadios5" value="" checked> Yes </label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="" id="membershipRadios6" value="option2"> No </label>
                                                  </div>
                                                </div>
                                              </div></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of co-author" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record9" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 10 marks for International conference for first author</p>
                                      <p class="mb-0">* 05 marks for second author</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>


                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Books/Articles/Chapters published in Books (Max.PI=15)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts10">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Title with Page no &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Publisher
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>ISSN/ISBN No.
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Date of Publication
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                               <th>Impact factor
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Whether you are main author
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>No. of co-author
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body10">
                                              <tr id="rec10-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title with page no" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Publisher" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="ISSN/ISBN No." class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Impact factor" class="form-control"></td>
                                                <td><div class="form-group row">
                                                 <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="radio10-1" id="membershipRadios7" value="" checked> Yes </label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="radio10-1" id="membershipRadios8" value="option2"> No </label>
                                                  </div>
                                                </div>
                                              </div></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of co-author" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record10" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record10" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table10">
                                                <tr id="">
                                                   <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title with page no" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Publisher" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="ISSN/ISBN No." class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Impact factor" class="form-control"></td>
                                                <td><div class="form-group row">
                                                 <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="" id="membershipRadios7" value="" checked> Yes </label>
                                                  </div>
                                                </div>
                                                <div class="col-sm-6">
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input type="radio" class="form-check-input rbtn" name="" id="membershipRadios8" value="option2"> No </label>
                                                  </div>
                                                </div>
                                              </div></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of co-author" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record10" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 15 marks for first author</p>
                                      <p class="mb-0">* 08 marks for co-author</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>


                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Research/thesis supervisor and project guide (Max.PI=40)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Degree &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Number Enrolled
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Thesis submitted
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>No. of Degree Awarded
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                               <th class="align-center" colspan="3">PI Values
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              </tr>
                                            </thead>
                                            <tbody id="">
                                              <tr id="">
                                                <td><span class="sn">1</span></td>
                                                <td>Ph.D</td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Number Enrolled" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Thesis Submitted" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of Degree Awarded" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Self" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="H.O.D " class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Committee" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" />
                                                </td>
                                              </tr>
                                              <tr id="">
                                                <td><span class="sn">2</span></td>
                                                <td>M.Tech</td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Number Enrolled" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Thesis Submitted" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of Degree Awarded" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Self" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="H.O.D " class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Committee" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" />
                                                </td>
                                              </tr>
                                            <tr id="">
                                                <td><span class="sn">3</span></td>
                                                <td>B.Tech<br>(Number of groups)</td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Number Enrolled" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Thesis Submitted" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="No. of Degree Awarded" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Self" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="H.O.D " class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Committee" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" />
                                                </td>
                                              </tr>
                                            </tbody>

                                          </table>
                                    </div> 
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 10 marks for awarded / 8 marks for thesis submitted / 6 marks for enrolled Ph.D students as a guide during academic year.</p>
                                      <p class="mb-0">* 8 marks for awarded / 6 marks for thesis submitted / 4 marks for enrolled M.Tech students as guide during academic year.</p>
                                       <p class="mb-0">* 6 marks for awarded / 4 marks for thesis submitted / 2 marks per enrolled B.Tech student groups as a guide during academic year.</p>
                                       <p class="mb-0">* For co-guide the marks will be half.</p>

                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>


                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Research/project/consultancy proposals submitted in academic year 2018/2019 but yet to get approval (Max. PI=15)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts11">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Agency
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Date of Submission
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Grant/Amount Mobilized (Rs.)
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body11">
                                              <tr id="rec11-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Agency" class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Grant/Amount Mobilized (Rs.)" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record11" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record11" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table11">
                                                <tr id="">
                                                   <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Agency" class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Grant/Amount Mobilized (Rs.)" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record11" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 10 Marks for more than 5 Lacs / 8 marks for between 1 to 5 Lacs / 6 marks for less than 1 Lacs as a principle investigator.</p>
                                      <p class="mb-0">* If second/third investigator then marks will be 5,4 and 3 respectively</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Ongoing Research/project/consultancy proposals approved/initiated in academic year 2018/2019 but yet to complete (Max. PI=15)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts12">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Agency
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Date of Submission
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Grant/Amount Mobilized (Rs.)
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body12">
                                              <tr id="rec12-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Agency" class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Grant/Amount Mobilized (Rs.)" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record12" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record12" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table12">
                                                <tr id="">
                                                   <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Agency" class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Grant/Amount Mobilized (Rs.)" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record12" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 10 Marks for more than 5 Lacs / 8 marks for between 1 to 5 Lacs/6 marks for less than 1 Lacs as a principle investigator.</p>
                                      <p class="mb-0">* If second/third investigator then marks will be 5,4 and 3 respectively</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <hr>

                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Completed Research Project and Consultancies initiated in academic year 2017-2018 but completed in academic year 2018-2019 (Max. PI=20) (Max. PI=20)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts13">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Agency
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Period in years
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Grant/Amount Mobilized (Rs.)
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body13">
                                              <tr id="rec13-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Agency" class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Grant/Amount Mobilized (Rs.)" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record13" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record13" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table13">
                                                <tr id="">
                                                   <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Agency" class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Grant/Amount Mobilized (Rs.)" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record13" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 10 Marks for more than 5 Lacs / 8 marks for between 1 to 5 Lacs/6 marks for less than 1 Lacs as a principle investigator completed in the academic year.</p>
                                      <p class="mb-0">* If second/third investigator then marks will be 5,4 and 3 respectively</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                   
                                 <hr>

                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Patent/Intellectual property filed/received (Max.PI=25)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts14">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Title &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Agency
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Date of Completion
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Grant/Amount Mobilized (Rs.)
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body14">
                                              <tr id="rec14-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Agency" class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Grant/Amount Mobilized (Rs.)" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record14" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record14" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table14">
                                                <tr id="">
                                                   <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Agency" class="form-control"></textarea></td>
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td><input type="text" name="" id=""  value="" placeholder="Grant/Amount Mobilized (Rs.)" class="form-control"></td>
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record14" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 10 Marks for more than 5 Lacs / 8 marks for between 1 to 5 Lacs/6 marks for less than 1 Lacs as a principle investigator completed in the academic year.</p>
                                      <p class="mb-0">* If second/third investigator then marks will be 5,4 and 3 respectively.</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <hr>

                                 <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description"><h6 class="text-dark">Patent/Intellectual property filed/received (Max.PI=25)</h6></p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts14">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Details of patent/intellectual property &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Date of received/filed
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body14">
                                              <tr id="rec14-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record14" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record14" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table14">
                                                <tr id="">
                                                  <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Title" class="form-control"></textarea></td>
                                                
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                
                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                <td><a class="btn btn-xs delete-record14" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 25 Marks each for patent / intellectual property received and 10 each for filed in the academic year</p>
                                     
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <hr>
                                
                                      <p class="text-dark">Publication, supervisor, guide, research, consultancy and intellectual properties<br>Category III : PI = out of 175</p>
                                     
                                   

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step8-back">Back</button>
                                <button type="button" class="btn btn-gradient-success" id="step8-btn">Next</button>

                            </div>   <!-- Step 8 end-->


                             <div class="tab-pane fade" id="nav-step9" role="tabpanel" aria-labelledby="nav-step9-tab">

                                <!-- Step 8-->                                       
                                         

                                 <div class="row">
                                    <div class="col-md-12">
                                
                                        <h6 class="text-dark"> Part B : Category IV : Curricular/Co-curricular/Administrative activities done outside college (Max. PI = 75)</h6>

                                        <p class="card-description">Seminars/invited talks given in Training Courses, Teaching-Evaluation Technology, Faculty Development Programs, Seminars, Workshops, Symposia etc. invited outside college (Max.PI = 30)</p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts15">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Details of Programme &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Date
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Organized by
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body15">
                                              <tr id="rec15-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Details of Programme" class="form-control"></textarea></td>
                                                
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Organised By" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record15" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record15" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table15">
                                                <tr id="">
                                                 <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Details of Programme" class="form-control"></textarea></td>
                                                
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Organised By" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                
                                                <td><a class="btn btn-xs delete-record15" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 05 Marks for each at national level.</p>
                                      <p class="mb-0">* 10 marks for international level abroad.</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description">Invited as cheif guest/guest of honor/expert/Chairmanships at Conference/reviewer/board member etc. outside college (Max. PI=30)</p>
                                       
                                          <table class="table table-bordered table-responsive table-sm" id="tbl_posts16">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Details of Programme &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Date
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th>Organized by
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body16">
                                              <tr id="rec16-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Details of Programme" class="form-control"></textarea></td>
                                                
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Organised By" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record16" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record16" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table16">
                                                <tr id="">
                                                 <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Details of Programme" class="form-control"></textarea></td>
                                                
                                                <td><input type="date" name="" id=""  value="" placeholder="" class="form-control"></td>
                                                <td> <textarea name='' id=""  value="" placeholder="Organised By" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>
                                                
                                                <td><a class="btn btn-xs delete-record16" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 05 Marks for each at national level.</p>
                                      <p class="mb-0">* 10 marks for international level abroad.</p>
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                

                                        <p class="card-description">Please give details of any other credential, significant contributions, and awards received etc. Which are not mentioned. (Max. PI=15)</p>
                                       
                                          <table class="table table-bordered table-responsive" id="tbl_posts17">
                                            <thead>
                                              <tr>
                                              <th> Sr No. </th>
                                              <th> Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Extra Information (if any)
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              
                                              <th> Attachments &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                              <th> Action </th>
                                              </tr>
                                            </thead>
                                            <tbody id="tbl_posts_body17">
                                              <tr id="rec17-1">
                                                <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Details" class="form-control"></textarea></td>
                                                
                                                <td> <textarea name='' id=""  value="" placeholder="Extra Information (if any)" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record17" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                              </tr>
                                            
                                            </tbody>

                                          </table>

                                           <div class="well clearfix"><br>
                                            <a class="btn btn-gradient-success add-record17" data-added="0"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add Row</a>
                                           </div>
                                    </div> 
                                                <div class="hide">
                                                <table id="sample_table17">
                                                <tr id="">
                                                 <td><span class="sn">1</span>.</td>
                                                <td> <textarea name='' id=""  value="" placeholder="Details" class="form-control"></textarea></td>
                                                
                                                <td> <textarea name='' id=""  value="" placeholder="Extra Information (if any)" class="form-control"></textarea></td>

                                                <td>  <input type="file" name="img[]" class="form-control" id="ctofile1" name="ctofile[]" /></td>

                                                <td><a class="btn btn-xs delete-record17" data-id="1"><i class="mdi mdi-delete"></i></a></td>
                                                </tr>
                                                </table>

                                                </div>

                    
       
                                     
                                </div><!-- row end -->
                                <hr>
                                <blockquote class="blockquote mt-4">
                                      <p class="mb-0">* 05 Marks for international / national credentials / activity / contribution not mentioned in application.</p>
                                     
                                    </blockquote>

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                 <hr>
                                 <p class="text-dark">Category IV : PI = out of 75</p>
                                     
                                   

                                <div class="row mt-4">


                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Self</label>
                                            <div class="col-sm-8">
                                               <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">H.O.D</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Committee</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step9-back">Back</button>
                                <button type="button" class="btn btn-gradient-success" id="step9-btn">Submit Form</button>

                            </div>   <!-- Step 9 end-->


                       

                        



                    </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- content-wrapper ends -->


    <?php 
include("../includes/footer.php");
 ?>