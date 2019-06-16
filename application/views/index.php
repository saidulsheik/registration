

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel = "stylesheet" type = "text/css"   href = "style.css" />
</head>
<body>
    <div class="container register">
                <div class="row">
                    <div class="col-md-1 register-left"></div>
                    <div class="col-md-11 register-right">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Registration Form</h3>
                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="ApplicantName" class="form-control" placeholder="Applicant Name *" value="" />
                                    </div>                                        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="EmailAddress" class="form-control" placeholder="Applicant Email *" value="" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h5>Mailing Address</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="DivisionName">Division Name :</label>
                                       <select name="DivisionName" class="form-control">
                                           <option value="">Select Division</option>
                                       </select>
                                    </div>
                                </div>
                               <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="DistrictName">District Name :</label>
                                       <select name="DistrictName" class="form-control">
                                           <option value="">Select District</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                     <label for="UpazilaName">Upazila Name :</label>
                                       <select name="UpazilaName" class="form-control">
                                           <option value="">Select Upzila</option>
                                       </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="AddressDetails">Address Details :</label>
                                       <textarea name="AddressDetails" class="form-control"></textarea>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="Language">Language Proficiency :</label>
                                     <label class="checkbox-inline"><input type="checkbox" value="Bangla">  &nbsp; Bangla &nbsp;</label>
                                     <label class="checkbox-inline"><input type="checkbox" value="English">  &nbsp; English &nbsp;</label>
                                     <label class="checkbox-inline"><input type="checkbox" value="French"> &nbsp; French </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <h5>Educational Qualification</h5>
                                </div>
                                 <div class="col-md-12">
                                    <table class="table table-bordered table-striped" id="education">
                                        <thead>
                                            <tr>
                                                <th>Exam Name</th>
                                                <th>University</th>
                                                <th>Board</th>
                                                <th>Result</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                     <div class="form-group">
                                                       <select name="ExamName[]" class="form-control">
                                                           <option value="">Select Exam</option>
                                                       </select>
                                                    </div>    
                                                </td>
                                                <td>
                                                     <div class="form-group">
                                                       <select name="UniversityName[]" class="form-control">
                                                           <option value="">Select University</option>
                                                       </select>
                                                    </div>    
                                                </td>
                                                <td>
                                                     <div class="form-group">
                                                       <select name="BoardName[]" class="form-control">
                                                           <option value="">Select Board</option>
                                                       </select>
                                                    </div>    
                                                </td>
                                                <td>
                                                     <div class="form-group">
                                                         <input type="" name="Result[]" class="form-control">
                                                    </div>    
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="button" id="add-education" value="Add" class="form-control">
                                                    </div>    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <label for="Photo">Photo:</label>
                                         <input type="file" name="Photo" class="form-control">             
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                         <label for="Attachment">CV Attachment:</label>
                                         <input type="file" name="Attachment" class="form-control">             
                                    </div> 
                                </div>
                                 <div class="col-md-12">
                                    <h5>Training</h5>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label for="Training">Do You Training? :</label>
                                     <label class="checkbox-inline"><input type="radio" value="Yes" name="Training">  &nbsp; Yes &nbsp;</label>
                                     <label class="checkbox-inline"><input type="radio" value="No" name="Training">  &nbsp; No &nbsp;</label>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                     <table class="table table-bordered table-striped" id="training">
                                        <thead>
                                            <tr>
                                                <th>Training Name</th>
                                                <th>Training Details</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                     <div class="form-group">
                                                         <input type="" name="TrainingName[]" class="form-control">
                                                    </div>    
                                                </td>
                                                 <td>
                                                     <div class="form-group">
                                                         <input type="" name="TrainingDetails[]" class="form-control">
                                                    </div>    
                                                </td>
                                                <td>
                                                     <div class="form-group">
                                                        <input type="button" id="add-training" value="Add More" class="form-control">
                                                    </div>     
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                 <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        <script type="text/javascript">
            $(function(){
                $('#add-education').click(function(){
                    addEducationRow();
                });
            });

            $(function(){
                $('#add-training').click(function(){
                    addTrainingRow();
                });
            });
                function addEducationRow(){
                    var html='';
                     html+='<tr><td>';
                       html+='<div class="form-group">';
                         html+='<select name="ExamName[]" class="form-control">';
                            html+='<option value="">Select Exam</option>';
                           html+='</select>';
                        html+='</div> '  ; 
                       html+='</td>';
                       html+='<td>';
                            html+='<div class="form-group">';
                               html+='<select name="UniversityName[]" class="form-control">';
                                  html+= '<option value="">Select University</option>';
                             html+='</select>';
                          html+= '</div> ';   
                     html+='</td>';
                       html+='<td>';
                            html+='<div class="form-group">';
                              html+='<select name="BoardName[]" class="form-control">';
                                  html+='<option value="">Select Board</option>';
                             html+='</select>';
                           html+='</div> '  ; 
                      html+='</td>';
                       html+='<td>';
                          html+= '<div class="form-group">';
                                html+='<input type="text" name="Result[]" class="form-control">';
                           html+='</div>';
                        html+='</td>';
                        html+='<td>';
                          html+='<div class="form-group">';
                                html+='<input type="button" name="remove" class="remove-education form-control" value="Remove">';
                           html+=' </div>';
                        html+='</td></tr>';
                    $('#education').append(html);               
                }

                function addTrainingRow(){
                    var html='';
                        html+='<tr>';
                           html+='<td>';
                                 html+='<div class="form-group">';
                                    html+='<input type="" name="TrainingName[]" class="form-control">';
                              html+='</div>    ';
                          html+='</td>';
                           html+='<td>';
                                html+='<div class="form-group">';
                                   html+='<input type="" name="TrainingDetails[]" class="form-control">';
                               html+='</div>'    ;
                           html+='</td>';
                            html+='<td>';
                                 html+='<div class="form-group">';
                                   html+=' <input type="button" id="remove-training" value="Remove" class="remove-training form-control">';
                                html+='</div> ' ;   
                            html+='</td>';
                        html+='</tr>';
                    $('#training').append(html);               
                }
            $(document).on('click', '.remove-education', function () {
                 $(this).closest('tr').remove();
                 return false;
             });
            $(document).on('click', '.remove-training', function () {
                 $(this).closest('tr').remove();
                 return false;
             });
        </script>
    </html>

        