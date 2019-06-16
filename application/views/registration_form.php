

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel = "stylesheet" type = "text/css"   href = "<?php echo base_url();?>assets/css/style.css" />
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
                                <input type="text" name="ApplicantName" id="ApplicantName" class="form-control" placeholder="Applicant Name *" value="" />
                            </div>                                        
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="EmailAddress" id="EmailAddress" class="form-control" placeholder="Applicant Email *" value="" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5>Mailing Address</h5>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                             <label for="DivisionName">Division Name :</label>
                               <select name="DivisionName" id="DivisionName" class="form-control" required="required">
                                   <option value="">Select Division</option>
                                    <?php
                                        if(!empty($divisions)){
                                            foreach($divisions as $division):
                                    ?>
                                        <option value="<?php echo $division->DivisionID; ?>"><?php echo $division->DivisionName; ?></option>
                                    <?php 
                                            endforeach; 
                                        }
                                     ?>
                               </select>
                            </div>
                        </div>
                       <div class="col-md-4">
                            <div class="form-group">
                             <label for="DistrictName">District Name :</label>
                               <select name="DistrictName" id="DistrictID" class="form-control" required="required">
                                   
                               </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                             <label for="UpazilaName">Upazila Name :</label>
                               <select name="UpazilaName" class="form-control" id="UpazilaId" required="required">
                                  
                               </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                             <label for="AddressDetails">Address Details :</label>
                               <textarea name="AddressDetails" id="AddressDetails" class="form-control"></textarea>
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                             <label for="Language">Language Proficiency :</label>
                             <label class="checkbox-inline"><input type="checkbox" name="Language" id="Language" value="Bangla">  &nbsp; Bangla &nbsp;</label>
                             <label class="checkbox-inline"><input type="checkbox" name="Language" id="Language" value="English">  &nbsp; English &nbsp;</label>
                             <label class="checkbox-inline"><input type="checkbox" name="Language" id="Language" value="French"> &nbsp; French </label>
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
                                               <select name="ExamName[]" id="ExamName" class="form-control">
                                                   <option value="">Select Exam</option>
                                                   <?php 
                                                    if(!empty($exams)){
                                                        foreach($exams as $exam):
                                                    ?>
                                                        <option value="<?php echo $exam->ExamId;?>"><?php echo $exam->ExamName;?></option>       
                                                    <?php
                                                        endforeach;
                                                    }
                                                   ?>
                                               </select>
                                            </div>    
                                        </td>
                                        <td>
                                             <div class="form-group">
                                               <select name="UniversityName[]" id="UniversityName" class="form-control">
                                                   <option value="">Select University</option>
                                                    <?php 
                                                    if(!empty($universities)){
                                                        foreach($universities as $university):
                                                    ?>
                                                        <option value="<?php echo $university->UniversityId;?>"><?php echo $university->UniversityName;?></option>       
                                                    <?php
                                                        endforeach;
                                                    }
                                                   ?>
                                               </select>
                                            </div>    
                                        </td>
                                        <td>
                                             <div class="form-group">
                                               <select name="BoardName[]" id="BoardName" class="form-control">
                                                  <option value="">Select Board</option>
                                                    <?php 
                                                    if(!empty($boards)){
                                                        foreach($boards as $board):
                                                    ?>
                                                        <option value="<?php echo $board->BoardId;?>"><?php echo $board->BoardName;?></option>       
                                                    <?php
                                                        endforeach;
                                                    }
                                                   ?>
                                               </select>
                                            </div>    
                                        </td>
                                        <td>
                                             <div class="form-group">
                                                 <input type="" name="Result[]" id="Result" class="form-control">
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
                             <label for="Training">Do You have Training? :</label>
                             <label class="checkbox-inline"><input type="radio" id="yes" value="Yes" name="Training">  &nbsp; Yes &nbsp;</label>
                             <label class="checkbox-inline"><input type="radio" id="no" value="No" name="Training">  &nbsp; No &nbsp;</label>
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
                var exam='<?php if(!empty($exams)){foreach($exams as $exam):?><option value="<?php echo $exam->ExamId;?>"><?php echo $exam->ExamName;?></option> <?php  endforeach;} ?>';
                var university='<?php if(!empty($universities)){foreach($universities as $university):?><option value="<?php echo $university->UniversityId;?>"><?php echo $university->UniversityName;?></option> <?php endforeach; } ?>';
                var board=' <?php  if(!empty($boards)){ foreach($boards as $board): ?> <option value="<?php echo $board->BoardId;?>"><?php echo $board->BoardName;?></option> <?php endforeach;} ?>';
                var html='';
                 html+='<tr><td>';
                   html+='<div class="form-group">';
                     html+='<select name="ExamName[]" class="form-control">';
                        html+='<option value="">Select Exam</option>'+exam;
                       html+='</select>';
                    html+='</div> '  ; 
                   html+='</td>';
                   html+='<td>';
                        html+='<div class="form-group">';
                           html+='<select name="UniversityName[]" class="form-control">';
                              html+= '<option value="">Select University</option>'+university;
                         html+='</select>';
                      html+= '</div> ';   
                 html+='</td>';
                   html+='<td>';
                        html+='<div class="form-group">';
                          html+='<select name="BoardName[]" class="form-control">';
                              html+='<option value="">Select Board</option>'+board;
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
    <script>
        $(document).ready(function(){
            $('#DivisionName').change(function(){
                var DivisionID=$(this).val();
                $("#UpazilaId").html('');
                if(DivisionID !=''){
                    $.ajax({
                        url:"<?php echo base_url()?>welcome/getAllDistrictByDivisionId",
                        method:"POST",
                        data:{DivisionID:DivisionID},
                        success:function(data){
                           $("#DistrictID").html(data);
                        }
                    });
                }else{
                    $("#DistrictID").html('');
                    $("#UpazilaId").html('');
                }
            });
        });

        $('#DistrictID').change(function(){
            var DistrictID=$(this).val();
            if(DistrictID !=''){
                $.ajax({
                    url:"<?php echo base_url();?>welcome/getAllUpazilaByDistrictId",
                    method:"POST",
                    data:{DistrictID:DistrictID},
                    success:function(data){
                       $("#UpazilaId").html(data);
                    }
                });
            }else{
                $("#UpazilaId").html('');
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#training').hide();
            $('#yes').click(function () {
               $('#training').show('slow');
        });
        $('#no').click(function () {
              $('#training').hide('slow');
         });
       });
    </script>
</html>

        