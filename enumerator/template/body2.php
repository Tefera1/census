<div class="">
  <div class="container">
    <div class="">
      <div class="row">
        <div class="col-12 col-lg-11">
          <div class="card card-body">
            <div class="">
              <div class="">
                <!-- Nav tabs -->
                <div class="tabs-wrapper col-12 col-lg-10 mx-auto">
                    <ul class="nav classic-tabs tabs-cyan" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link waves-light active" data-toggle="tab" href="#panel51" role="tab">New Person</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-light" data-toggle="tab" href="#emigrated" role="tab">Emigrated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-light" data-toggle="tab" href="#imigrated" role="tab">Imigrated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-light" data-toggle="tab" href="#panel53" role="tab">Death</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-light" data-toggle="tab" href="#panel54" role="tab">Birth</a>
                        </li>
                    </ul>
              </div><hr>
            </div>
            </div>
            <div class="tab_contents">
              <div class="">
                <div class="bg-info">
                  <div class="container-fluid">
                    <div class="" style="background-color:white">
                      <!-- Tab panels -->
                      <div class="tab-content">

                          <!--Panel 1-->
                          <div class="tab-pane fade in show active" id="panel51" role="tabpanel">
                              <div class="row">
                                <div class="col-12">
                                    <p class="text-center text-primary h6">Register New Person</p>
                                </div>
                                <div class="col-12 col-lg-11 mx-auto">
                                  <form class="my-3" action="data/newuser.php" method="post">
                                    <div class="row">
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="idno" value="" class="form-control" placeholder="ID No">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="fname" value="" class="form-control" placeholder="First Name">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="lname" value="" class="form-control" placeholder="Father Name">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="gname" value="" class="form-control" placeholder="G/Father Name">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="nationality" value="" class="form-control" placeholder="Nationality">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <select class="custom-select" name="region">
                                          <option value="Region">Region</option>
                                          <option value="Tigray">Tigray</option>
                                          <option value="Afar">Afar</option>
                                          <option value="Amhara">Amhara</option>
                                          <option value="Oromia">Oromia</option>
                                          <option value="Somale">Somale</option>
                                          <option value="SNNP">SNNP</option>
                                          <option value="Gambela">Gambela</option>
                                          <option value="Benishangul Gumuz">Benishangul Gumuz</option>
                                          <option value="Harari">Harari</option>
                                          <option value="Dire Dawa">Dire Dawa</option>
                                          <option value="Addis Ababa">Addis Ababa</option>
                                        </select>
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="zone" value="" class="form-control" placeholder="Zone">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="woreda" value="" class="form-control" placeholder="Woreda">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="town" value="" class="form-control" placeholder="Town">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="kebele" value="" class="form-control" placeholder="Kebele">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <label for="">Birth date</label>
                                        <input type="date" name="bdate" value="" class="form-control">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <label for="">Gender</label>
                                        <select class="custom-select" name="gender">
                                          <option value="Select">Select</option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                          <option value="Other">Other</option>
                                        </select>
                                      </div>
                                      <div class="col-12 col-lg-4 mx-auto form-group">
                                        <input type="submit" name="newuser" value="Register New User" class="btn btn-secondary">
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                          </div>
                          <!--/.Panel 1-->

                          <!--Panel 2-->
                          <div class="tab-pane fade" id="emigrated" role="tabpanel">
                            <div class="row">
                              <div class="col-12">
                                  <p class="text-center text-primary h6">Emigrated</p>
                              </div>
                              <div class="col-12 col-lg-11 mx-auto py-3">
                                <form class="" action="data/migration.php" method="post">
                                  <div class="row">
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="idno" value="" class="form-control" placeholder="ID No">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="fname" value="" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="lname" value="" class="form-control" placeholder="Father Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="gname" value="" class="form-control" placeholder="G/Father Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="nationality" value="" class="form-control" placeholder="Nationality">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <select class="custom-select" name="region">
                                        <option value="Region">Region</option>
                                        <option value="Tigray">Tigray</option>
                                        <option value="Afar">Afar</option>
                                        <option value="Amhara">Amhara</option>
                                        <option value="Oromia">Oromia</option>
                                        <option value="Somale">Somale</option>
                                        <option value="SNNP">SNNP</option>
                                        <option value="Gambela">Gambela</option>
                                        <option value="Benishangul Gumuz">Benishangul Gumuz</option>
                                        <option value="Harari">Harari</option>
                                        <option value="Dire Dawa">Dire Dawa</option>
                                        <option value="Addis Ababa">Addis Ababa</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="zone" value="" class="form-control" placeholder="Zone">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="woreda" value="" class="form-control" placeholder="Woreda">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="town" value="" class="form-control" placeholder="Town">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="kebele" value="" class="form-control" placeholder="Kebele">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Birth date</label>
                                      <input type="date" name="bdate" value="" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Emigrated date</label>
                                      <input type="date" name="edate" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-lg-6">
                                      <label for="">Emigrated to</label>
                                      <input type="text" name="emigratedto" value="" placeholder="e.g. Canada" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Gender</label>
                                      <select class="custom-select" name="gender">
                                        <option value="Select">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto form-group">
                                      <input type="submit" name="emigrator" value="Register Emigrator" class="btn btn-secondary">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!--/.Panel 2-->
                          <!--Panel 2-->
                          <div class="tab-pane fade" id="imigrated" role="tabpanel">
                            <div class="row">
                              <div class="col-12">
                                  <p class="text-center text-primary h6">Imigrated</p>
                              </div>
                              <div class="col-12 col-lg-11 mx-auto py-3">
                                <form class="" action="data/imigration.php" method="post">
                                  <div class="row">
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="idno" value="" class="form-control" placeholder="ID No">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="fname" value="" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="lname" value="" class="form-control" placeholder="Father Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="gname" value="" class="form-control" placeholder="G/Father Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="nationality" value="" class="form-control" placeholder="Nationality">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <select class="custom-select" name="region">
                                        <option value="Region">Region</option>
                                        <option value="Tigray">Tigray</option>
                                        <option value="Afar">Afar</option>
                                        <option value="Amhara">Amhara</option>
                                        <option value="Oromia">Oromia</option>
                                        <option value="Somale">Somale</option>
                                        <option value="SNNP">SNNP</option>
                                        <option value="Gambela">Gambela</option>
                                        <option value="Benishangul Gumuz">Benishangul Gumuz</option>
                                        <option value="Harari">Harari</option>
                                        <option value="Dire Dawa">Dire Dawa</option>
                                        <option value="Addis Ababa">Addis Ababa</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="zone" value="" class="form-control" placeholder="Zone">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="woreda" value="" class="form-control" placeholder="Woreda">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="town" value="" class="form-control" placeholder="Town">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="kebele" value="" class="form-control" placeholder="Kebele">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Birth date</label>
                                      <input type="date" name="bdate" value="" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Imigrated date</label>
                                      <input type="date" name="edate" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-lg-6">
                                      <label for="">Imigrated from</label>
                                      <input type="text" name="emigratedto" value="" placeholder="e.g. Canada" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Gender</label>
                                      <select class="custom-select" name="gender">
                                        <option value="Select">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto form-group">
                                      <input type="submit" name="imigration" value="Register Imigrator" class="btn btn-secondary">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!--/.Panel 2-->

                          <!--Panel 3-->
                          <div class="tab-pane fade" id="panel53" role="tabpanel">
                            <div class="row">
                              <div class="col-12">
                                  <p class="text-center text-primary h6">Death</p>
                              </div>
                              <div class="col-12 col-lg-11 mx-auto py-3">
                                <form class="" action="data/death.php" method="post">
                                  <div class="row">
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="idno" value="" class="form-control" placeholder="ID No">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="fname" value="" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="lname" value="" class="form-control" placeholder="Father Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="gname" value="" class="form-control" placeholder="G/Father Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="nationality" value="" class="form-control" placeholder="Nationality">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <select class="custom-select" name="region">
                                        <option value="Region">Region</option>
                                        <option value="Tigray">Tigray</option>
                                        <option value="Afar">Afar</option>
                                        <option value="Amhara">Amhara</option>
                                        <option value="Oromia">Oromia</option>
                                        <option value="Somale">Somale</option>
                                        <option value="SNNP">SNNP</option>
                                        <option value="Gambela">Gambela</option>
                                        <option value="Benishangul Gumuz">Benishangul Gumuz</option>
                                        <option value="Harari">Harari</option>
                                        <option value="Dire Dawa">Dire Dawa</option>
                                        <option value="Addis Ababa">Addis Ababa</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="zone" value="" class="form-control" placeholder="Zone">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="woreda" value="" class="form-control" placeholder="Woreda">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="town" value="" class="form-control" placeholder="Town">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="kebele" value="" class="form-control" placeholder="Kebele">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Birth date</label>
                                      <input type="date" name="bdate" value="" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Died date</label>
                                      <input type="date" name="ddate" value="" class="form-control">
                                    </div>
                                    <div class="form-group col-12 col-lg-6">
                                      <label for="">Death cause</label>
                                      <input type="text" name="death_cause" value="" placeholder="HIV AIDS Diseaes" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Gender</label>
                                      <select class="custom-select" name="gender">
                                        <option value="Select">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto form-group">
                                      <input type="submit" name="death" value="Register Death" class="btn btn-secondary">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!--/.Panel 3-->

                          <!--Panel 4-->
                          <div class="tab-pane fade" id="panel54" role="tabpanel">
                            <div class="row">
                              <div class="col-12">
                                  <p class="text-center text-primary h6">Birth</p>
                              </div>
                              <div class="col-12 col-lg-11 mx-auto">
                                <form class="" action="data/birth.php" method="post">
                                  <div class="row">
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="idno" value="" class="form-control" placeholder="ID No">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="fname" value="" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="lname" value="" class="form-control" placeholder="Father Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="gname" value="" class="form-control" placeholder="G/Father Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="nationality" value="" class="form-control" placeholder="Nationality">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <select class="custom-select" name="region">
                                        <option value="Region">Region</option>
                                        <option value="Tigray">Tigray</option>
                                        <option value="Afar">Afar</option>
                                        <option value="Amhara">Amhara</option>
                                        <option value="Oromia">Oromia</option>
                                        <option value="Somale">Somale</option>
                                        <option value="SNNP">SNNP</option>
                                        <option value="Gambela">Gambela</option>
                                        <option value="Benishangul Gumuz">Benishangul Gumuz</option>
                                        <option value="Harari">Harari</option>
                                        <option value="Dire Dawa">Dire Dawa</option>
                                        <option value="Addis Ababa">Addis Ababa</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="zone" value="" class="form-control" placeholder="Zone">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="woreda" value="" class="form-control" placeholder="Woreda">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="town" value="" class="form-control" placeholder="Town">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="kebele" value="" class="form-control" placeholder="Kebele">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Birth date</label>
                                      <input type="date" name="bdate" value="" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <label for="">Gender</label>
                                      <select class="custom-select" name="gender">
                                        <option value="Select">Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-4 mx-auto form-group">
                                      <input type="submit" name="birth" value="Register Birth" class="btn btn-secondary">
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!--/.Panel 4-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
