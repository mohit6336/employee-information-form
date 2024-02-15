<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta t
      ags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    
    <link href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Second Stage</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!-- Include bootstrap datepicker library -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>
          
    <style>
        .form-check-inline {
            margin-right: 1.5rem;
        }

        .error {
            display: block;
            width: 100%;
            font-weight: light;
            color: #B94A48;
        }

        #msg {
            display: none;
        }
    </style>
</head>

<body>
    <form method="Post" action="{{ route('store_second_stage') }}">
        @csrf
        <div class="container-fluid bg-light text-dark py-3">
            <header class="text-center">
                <h1 class="display-6 fw-bolder">Educational Details</h1>
            </header>
            <hr>
            <div class="container mt-5">
                <div class="row my-4">
                    <div class="col-lg-12 mx-auto">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="mx-auto">Academic Details<sup style="color :red">*</sup></h4>
                            </div>
                            <div class="card-body mt-3">
                                <form method="post" id="add_form">
                                    <div id="show_item">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <input type="text" name="course_name[]" class="form-control"
                                                    placeholder="Name of Course" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <input type="text" name="institute_name[]" class="form-control"
                                                    placeholder="Name of Institute / University" required>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <input type=" number" name="cgpa[]" class="form-control"
                                                    placeholder="CGPA" required>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <input type=" number" name="passing_year[]" class="form-control"
                                                    placeholder="Passing year" required>
                                            </div>
                                            <div class="col-md-1 mb-3 d-grid">
                                                <button class="btn btn-success
                           add_item_btn">
                                                    Add
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4 class="mx-auto">Career Information</h4>
                            </div>
                          
                            <div class="card-body mt-3">
                                <form action="#" method="post" id="add_form">
                                    <div id="show_item2">
                                        <div class="card">
                                            <div class="row p-3">
                                                <div class="col-md-4 mb-3">
                                                    <input type="text" name="name_of_org[]" class="form-control"
                                                        placeholder="Name & Address of organization">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <input type="text" name="designation[]" class="form-control"
                                                        placeholder="Designation">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <input type="text" name="annual_salary[]" class="form-control"
                                                        placeholder="Annual Salary while leaving">
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <input type="text" name="reason_for_leaving[]"
                                                        class="form-control" placeholder="Reason for leaving">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <input type="text" class="form-control datepick" id="datepicker"
                                                        name="startingdate[]" placeholder="Start date" >
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <input type="text" class="form-control datepick" id="datepicker1"
                                                        name="endingdate[]" placeholder="End date">
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <input type="text" class="form-control" name="experience[]"
                                                        placeholder="Experience">
                                                </div>
                                                <div class="col-md-1 d-grid mb-3">
                                                    <button class="btn btn-success career_row">
                                                        Add
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-12 mx-auto">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h4 class="mx-auto">Languages known</h4>
                                    </div>
                                    <div class="card-body mt-2">
                                        <form method="post" id="add_form">
                                            <div id="show_item">
      

<div class="container">
  <div class="row align-items-center">
    <div class="col-md-2">
      <div class="input-group mb-3">

        <select class="form-select" id="selectBar" disabled>
          <option selected >English</option> 
          <option value="assamese">Assamese</option>
          <option value="bengali">Bengali</option>
          <option value="bodo">Bodo</option>
          <option value="dogri">Dogri</option>
          <option value="gujarati">Gujarati</option>
          <option value="hindi">Hindi</option>
          <option value="kannada">Kannada</option>
          <option value="kashmiri">Kashmiri</option>
          <option value="konkani">Konkani</option>
          <option value="malayalam">Malayalam</option>
          <option value="manipuri">Manipuri</option>
          <option value="marathi">Marathi</option>
          <option value="nepali">Nepali</option>
          <option value="oriya">Oriya</option>
          <option value="punjabi">Punjabi</option>
          <option value="sanskrit">Sanskrit</option>
          <option value="santali">Santali</option>
          <option value="sindhi">Sindhi</option>
          <option value="tamil">Tamil</option>
          <option value="telugu">Telugu</option>
          <option value="urdu">Urdu</option>
        
        </select>
      </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox"
                id="inlineCheckbox1" value="option1">
            <label class="form-check-label"
                for="inlineCheckbox1">Read</label>
        </div>
        <div class="form-check form-check-inline ">
            <input class="form-check-input" type="checkbox"
                id="inlineCheckbox2" value="option2">
            <label class="form-check-label"
                for="inlineCheckbox2">Write</label>
        </div>
        <div class="form-check form-check-inline ">
            <input class="form-check-input" type="checkbox"
                id="inlineCheckbox3" value="option3">
            <label class="form-check-label"
                for="inlineCheckbox3">Speak</label>
        </div>
    
       </div>
  </div>
</div>

                                                    
<div class="container">
    <div class="row align-items-center">
      <div class="col-md-2">
        <div class="input-group mb-3">
  
          <select class="form-select" id="selectBar" disabled>
            <option selected >Hindi</option> 
            <option value="assamese">Assamese</option>
            <option value="bengali">Bengali</option>
            <option value="bodo">Bodo</option>
            <option value="dogri">Dogri</option>
            <option value="kannada">Kannada</option>
            <option value="kashmiri">Kashmiri</option>
            <option value="konkani">Konkani</option>
            <option value="malayalam">Malayalam</option>
            <option value="manipuri">Manipuri</option>
            <option value="marathi">Marathi</option>
            <option value="nepali">Nepali</option>
            <option value="oriya">Oriya</option>
            <option value="punjabi">Punjabi</option>
            <option value="sanskrit">Sanskrit</option>
            <option value="santali">Santali</option>
            <option value="sindhi">Sindhi</option>
            <option value="tamil">Tamil</option>
            <option value="telugu">Telugu</option>
            <option value="urdu">Urdu</option>
          
          </select>
        </div>
      </div>
      <div class="col-md-6 mb-3">
          <div class="form-check form-check-inline ">
              <input class="form-check-input" type="checkbox"
                  id="inlineCheckbox1" value="option1">
              <label class="form-check-label"
                  for="inlineCheckbox1">Read</label>
          </div>
          <div class="form-check form-check-inline ">
              <input class="form-check-input" type="checkbox"
                  id="inlineCheckbox2" value="option2">
              <label class="form-check-label"
                  for="inlineCheckbox2">Write</label>
          </div>
          <div class="form-check form-check-inline ">
              <input class="form-check-input" type="checkbox"
                  id="inlineCheckbox3" value="option3">
              <label class="form-check-label"
                  for="inlineCheckbox3">Speak</label>
          </div>
      
         </div>
    </div>
  </div>
  
<div class="container">
    <div class="row align-items-center">
      <div class="col-md-2">
        <div class="input-group mb-3">
  
          <select class="form-select" id="selectBar" disabled>
            <option selected >Gujarati</option> 
            <option value="assamese">Assamese</option>
            <option value="bengali">Bengali</option>
            <option value="bodo">Bodo</option>
            <option value="dogri">Dogri</option>
            <option value="gujarati">Gujarati</option>
            <option value="hindi">Hindi</option>
            <option value="kannada">Kannada</option>
            <option value="kashmiri">Kashmiri</option>
            <option value="konkani">Konkani</option>
            <option value="malayalam">Malayalam</option>
            <option value="manipuri">Manipuri</option>
            <option value="marathi">Marathi</option>
            <option value="nepali">Nepali</option>
            <option value="oriya">Oriya</option>
            <option value="punjabi">Punjabi</option>
            <option value="sanskrit">Sanskrit</option>
            <option value="santali">Santali</option>
            <option value="sindhi">Sindhi</option>
            <option value="tamil">Tamil</option>
            <option value="telugu">Telugu</option>
            <option value="urdu">Urdu</option>
          
          </select>
        </div>
      </div>
      <div class="col-md-6 mb-3">
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox"
                  id="inlineCheckbox1" value="option1">
              <label class="form-check-label"
                  for="inlineCheckbox1">Read</label>
          </div>
          <div class="form-check form-check-inline ">
              <input class="form-check-input" type="checkbox"
                  id="inlineCheckbox2" value="option2">
              <label class="form-check-label"
                  for="inlineCheckbox2">Write</label>
          </div>
          <div class="form-check form-check-inline ">
              <input class="form-check-input" type="checkbox"
                  id="inlineCheckbox3" value="option3">
              <label class="form-check-label"
                  for="inlineCheckbox3">Speak</label>
          </div>
      
         </div>
    </div>
  </div>
                                            </div>
                                            <div class="container" id="msg">
                                                <div class="row align-items-center">
                                                  <div class="col-md-2">
                                                    <div class="input-group mb-3">
                                              
                                                      <select class="form-select" id="selectBar">
                                                        <option selected >Select language</option> 
                                                        <option value="assamese">Assamese</option>
                                                        <option value="bengali">Bengali</option>
                                                        <option value="bodo">Bodo</option>
                                                        <option value="dogri">Dogri</option>
                                                        <option value="kannada">Kannada</option>
                                                        <option value="kashmiri">Kashmiri</option>
                                                        <option value="konkani">Konkani</option>
                                                        <option value="malayalam">Malayalam</option>
                                                        <option value="manipuri">Manipuri</option>
                                                        <option value="marathi">Marathi</option>
                                                        <option value="nepali">Nepali</option>
                                                        <option value="oriya">Oriya</option>
                                                        <option value="punjabi">Punjabi</option>
                                                        <option value="sanskrit">Sanskrit</option>
                                                        <option value="santali">Santali</option>
                                                        <option value="sindhi">Sindhi</option>
                                                        <option value="tamil">Tamil</option>
                                                        <option value="telugu">Telugu</option>
                                                        <option value="urdu">Urdu</option>
                                                      
                                                      </select>
                                                    </div>
                                                  </div>
                                                  <div class="col-md-6 mb-3">
                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="checkbox"
                                                              id="inlineCheckbox1" value="option1">
                                                          <label class="form-check-label"
                                                              for="inlineCheckbox1">Read</label>
                                                      </div>
                                                      <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="checkbox"
                                                              id="inlineCheckbox2" value="option2">
                                                          <label class="form-check-label"
                                                              for="inlineCheckbox2">Write</label>
                                                      </div>
                                                      <div class="form-check form-check-inline ">
                                                          <input class="form-check-input" type="checkbox"
                                                              id="inlineCheckbox3" value="option3">
                                                          <label class="form-check-label"
                                                              for="inlineCheckbox3">Speak</label>
                                                      </div>
                                                  
                                                     </div>
                                                </div>
                                              </div>
                                                        <div class="form-check">
                                                            <div class="form-check-label ps-4">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="Checked" onclick="check()">
                                                                <label class="form-check-label" for="Checked"> Other
                                                                    Lanuguages</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                    </div>
                                </div>
                            </div>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col-lg-12 mx-auto">
                                        <div class="card shadow">
                                            <div class="card-header">
                                                <h4 class="mx-auto">Achievements</h4>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="col-12">
                                                    <label for="inputAddress" class="form-label">Achievements / Awards
                                                        in present job
                                                    </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
    </form>
    <div class="col-md-12 d-grid gap-1 d-md-flex justify-content-md-end my-4">
        <a href="userform" class="btn btn-danger">Previous</button></a>
        <button type="submit" class="btn btn-primary">Next</button>
    </div>

    </div>
    </div>
    <script>

        function check() {
            var cb = document.getElementById("Checked");
            var text = document.getElementById("msg");
            if (cb.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $(".add_item_btn").click(function(e) {
                e.preventDefault();
                $("#show_item").append(`<div class="row">
                        <div class="col-md-4 mb-3">
                          <input
                            type="text"
                            name="course_name[]"
                            class="form-control"
                            placeholder="Name of Course"
                            required
                          />
                        </div>
                        <div class="col-md-3 mb-3">
                          <input
                            type="text"
                            name="institute_name[]"
                            class="form-control"
                            placeholder="Name of Institute / University"
                            required
                          />
                        </div>
                        <div class="col-md-2 mb-3">
                          <input
                            type=" number"
                            name="cgpa[]"
                            class="form-control"
                            placeholder="CGPA"
                            required
                          />
                        </div>
                        <div class="col-md-2 mb-3">
                          <input
                            type=" number"
                            name="passing_year[]"
                            class="form-control"
                            placeholder="Passing year"
                            required
                          />
                        </div>
                        <div class="col-md-1 mb-3 d-grid">
                          <button class="btn btn-danger remove_item_btn">
                            Remove
                          </button>
                        </div>
                      </div>`);
            });



            $(".career_row").click(function(s) {
                s.preventDefault();
                $("#show_item2").append(`
          <div class = "card mt-2 p-3">
                      <div class="row">
                        <div class="col-md-4 mb-3">
                          <input
                            type="text"
                            name="name_of_org[]"
                            class="form-control"
                            placeholder="Name & Address of organization"
                            
                          />
                        </div>
                        <div class="col-md-2 mb-3">
                          <input
                            type="text"
                            name="designation[]"
                            class="form-control"
                            placeholder="Designation"
                            /> </div>

                            <div class="col-md-3 mb-3">
                              <input
                                type="text"
                                name="annual_salary[]"
                                class="form-control"
                                placeholder="Annual Salary while leaving"
                                /> </div>

                                <div class="col-md-3 mb-3">
                                  <input
                                    type="text"
                                    name="reason_for_leaving[]"
                                    class="form-control"
                                    placeholder="Reason for leaving"
                                    /> </div>
                                    <div class="col-md-2 mb-3">
                                      <input type="text" class="form-control datepick" id="datepicker" name="startingdate[]" placeholder="Start date">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                     <input type="text" class="form-control datepick" id="datepicker1" name="endingdate[]" placeholder="End date">
                                   </div>

                                   <div class="col-md-2 mb-3">
                                    <input type="text" class=form-control name="experience[]" placeholder="Experience">
                                  </div>
                                    <div class="col-md-1 mb-3 d-grid">
                                      <button class="btn btn-danger remove_item_btn_2">
                                        Remove
                                      </button>
                                    </div>

                        </div>
                        </div>
                 `);

            });
            $(document).on("click", ".remove_item_btn_2", function(s) {
                s.preventDefault();
                let row_item2 = $(this).parent().parent().parent();
                $(row_item2).remove();
            });


            $(document).on("click", ".remove_item_btn", function(e) {
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });

            $('.datepick').datepicker({
        onSelect: function(value, ui) {
            var today = new Date(), 
                age = today.getFullYear() - ui.selectedYear;
            $('#age').val(age);
        },
        maxDate: '+0d',
        changeMonth: true,
        changeYear: true,
        yearRange: '1980:',
        dateFormat: 'dd/mm/yy',
    });
            $(".career_row").click(function() {
                $(".datepick").datepicker("destroy"); //Distroy the date picker.

                /* Code to add a new row */

                $('.datepick').datepicker({
        onSelect: function(value, ui) {
            var today = new Date(), 
                age = today.getFullYear() - ui.selectedYear;
            $('#age').val(age);
        },
        maxDate: '+0d',
        changeMonth: true,
        changeYear: true,
        yearRange: '1980:',
        dateFormat: 'dd/mm/yy',
    }); //recreating the date picker

            })
        });


        //Ajax
        $(document).ready(function(e) {


            //add Students
            $('.addForm').submit(function(e) {
                e.preventDefault();


                var formdata = new FormData(this);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "post",
                    url: "{{ route('academic_details_store') }}",
                    data: formdata,
                    dataType: "json",
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert(response.message);
                        // if (response.status == 200) {



                        //     window.location.href = 'secondstage';
                        // }

                    }
                });
            });

        });
    </script>

</body>

</html>
