<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="formnew.css">
  <title>Responsive Form Example</title>
  <style>
.left{
  float: left;
}
.right{
  float: right;
}
  </style>
</head>

<body style="display: flex;">
  <div class="container col-xs-12" style="margin-left:10%;margin-top:10%;width:100%">
    <form class="container col-xs-12" style="width:100%;">
      <div class="container col-xs-12">
              <div class="left"><p>Date</p></div>
              <div class="right"><p>Ref No: RPAEL/HR/MR/23/ </p></div>
      </div>

      <div class="container col-xs-12" style="display: flex;border:1px solid black; margin-left:; width:100%;"></div>

      <div class="container col-xs-12" style="display: flex; justify-content: center ">
        <h4>MEMBER HIRING REQUISITION FORM</h4>
      </div>

      <div class="container col-xs-12 unitdiv" style="display: flex; justify-content: space-between; flex-wrap: wrap;">

        <div style="display: flex; justify-content: space-between; flex-wrap: wrap; width: 100%;">
          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <label style="margin-left:;">1. Unit/Department:</label>
            <br>
            <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width: 100%;height:60%;">
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <label style="">-- Location:</label>
            <br>
            <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width: 100%; height:60%;">
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
        </div>

        <div style="display: flex; justify-content: space-between; flex-wrap: wrap; width: 100%;">
          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <label style="">2. Position/Designation:</label>
            <br>
            <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width: 100%;height:60%;">
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <label style="">-- Grade:</label>
            <br>
            <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width: 100%;height:60%;">
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
        </div>

        <div style="display: flex; justify-content: space-between; flex-wrap: wrap; width: 100%;margin-top:2%;">
          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <label style="">3. Reporting to:</label>
            <br>
            <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width: 100%;height:60%;">
              <option>Option 1</option>
              <option>Option 2</option>
              <option>Option 3</option>
            </select>
          </div>
          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <label style="">4.Salary Range:</label>
            <br>
            <input type="text" class="" id="exampleInput" placeholder="Enter your value"
              style="width: 100%;height:60%;">
          </div>
        </div>

        <div style="display: flex; justify-content: space-between; flex-wrap: wrap; width: 100%;margin-top:2%;">

          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <label for="exampleInput" style="">5.Number of Person(s) Required:</label>
            <br>
            <input type="number" class="" id="exampleInput" placeholder="Enter your value"
              style="width: 100%;height:60%;">
          </div>

          <div style="flex-basis: 48%; margin-bottom: 10px;"><label style="">6.Choose Gender
              :</label>
            <br>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check"> Male
              </label>
            </div>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check"> Female
              </label>
            </div>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check"> Any
              </label>
            </div>
          </div>
        </div>
      </div>

      <div class="container col-xs-12" style="margin-left: ;"><label style="">7.Justification
          :</label>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> Replacement
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> New Position
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> Additional Work Load
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> Special Assignment
          </label>
        </div>
      </div>

      <div class="container col-xs-12" style=""><label style="">8.When Required
          :</label>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> Immediate (Less than a month)
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> 1 month
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> 2 months
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> 3 months
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> 4 months
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> 5 months
          </label>
        </div>
        <div class="radio" style="display: inline-block;">
          <label>
            <input type="radio" name="options" class="single-check"> 6 months
          </label>
        </div>
      </div>

      <div class="container col-xs-12" style="">
        <label for="">9. Job Description (Duties & Tasks to be performed):</label>
        <br>
        <label for="">Duties & Tasks</label>
        <textarea class="form-control" id="exampleInput" placeholder="Enter your job description"
          style="width: 100%; height: 100px;"></textarea>
      </div>

      <div class="container col-xs-12" style="">
        <label for="">10. Job Specification:</label>
      </div>

      <div class="container col-xs-12" style="">
        <label for="">10.1 Academic Background:</label>
        <div style="display:flex;justify-content:space-between;">
          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <div class="checkbox" style=" ">
              <label>
                <input type="checkbox" class="single-check"> SSC
              </label>
              <br>
              <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width:80%;">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
            <div class="checkbox" style=" ">
              <label>
                <input type="checkbox" class="single-check"> HSC
              </label>
              <br>
              <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width:80%;">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
            <div class="checkbox" style="">
              <label>
                <input type="checkbox" class="single-check"> Diploma
              </label>
              <br>
              <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width:80%;">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
          </div>

          <div style="flex-basis: 48%; margin-bottom: 10px;">
            <div class="checkbox" style="">
              <label>
                <input type="checkbox" class="single-check">Bachelor
              </label>
              <br>
              <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width:80%;">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
            <div class="checkbox" style=" ">
              <label>
                <input type="checkbox" class="single-check"> Masters
              </label>
              <br>
              <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width:80%;">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
            <div class="checkbox" style=" ">
              <label>
                <input type="checkbox" class="single-check"> Other
              </label>
              <br>
              <select class="selectpicker" data-live-search="true" id="exampleSelect" style="width:80%;">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="container col-xs-12" style="margin-left:;">
        <label for="">10.2 Experience Level :</label>
        <div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> Fresh
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 1 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 2 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 3 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 4 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 5 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 6 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 7 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 8 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 9 years
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check"> 10 years
            </label>
          </div>
        </div>
      </div>

      <div class="container col-xs-12" style="margin-left:; margin-top:15px;">
        <label>10.3 Special Skills/ Training Required (Please specify)</label>
        <br>
        <textarea style=" height:100px; width:100%">
•	Excellent verbal and written communication skills, including ability to effectively communicate with internal and external customers.
•	Excellent computer proficiency (MS Office - Word, Excel, PowerPoint and Outlook).
•	Must be able to work under pressure and meet deadlines, while maintaining a positive attitude and providing exemplary of motivation.
•	Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices

Physical Requirements:
•	Honesty, sincerity, foresightedness and hardworking is must for the position.
•	Ability to safely and successfully perform the essential job functions.
•	Must be in sound health condition
•	Ability to maintain regular, punctual attendance during office time.
•	Must have the ability to communicate in English.
•	Good Presentation skill.
        </textarea>
      </div>

      <div class="container col-xs-12" style="margin-top:10px; margin-left:;">
        <div>
          <label>10.4 Physical Attributes, if any-</label>
          <div>
            <label for="">a.Age range:</label>

            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check">20
              </label>
            </div>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check">25
              </label>
            </div>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check">30
              </label>
            </div>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check">35
              </label>
            </div>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check">40
              </label>
            </div>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check">45
              </label>
            </div>
            <div class="radio" style="display: inline-block;">
              <label>
                <input type="radio" name="options" class="single-check">50+
              </label>
            </div>

          </div>
        </div>
        <div>
          <label for="">b. Physique:</label>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check">Not Important
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check">Average
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check">Strong
            </label>
          </div>
        </div>
        <div>
          <label for="">c. Appearance:</label>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check">Not Important
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check">Moderate
            </label>
          </div>
          <div class="radio" style="display: inline-block;">
            <label>
              <input type="radio" name="options" class="single-check">Pleasent
            </label>
          </div>
        </div>
      </div>
      <div class="container col-xs-12" style="display: flex;border:1px solid black; margin-left:; width:100%;"></div>

      <div class="container col-xs-12" style="margin-top:10px; margin-left:;">
        <label>11. Plan for Recruitment- HR (Part) </label>
      </div>

      <div class="container col-xs-12" style="margin-top:10px; margin-left:;">
        <label style="display: inline-block;">11.1. Sourcing:</label>
        <div class="checkbox" style="display: inline-block">
          <label>
            <input type="checkbox" value=""> Online
          </label>
        </div>
        <div class="checkbox" style="display: inline-block">
          <label>
            <input type="checkbox" value=""> NewsPaper
          </label>
        </div>
        <div class="checkbox" style="display: inline-block">
          <label>
            <input type="checkbox" value=""> Head Hunting
          </label>
        </div>
      </div>

      <div class="container col-xs-12">
        <table class="table table-bordered">
          <thead>
            <tr style="">
              <th style="text-align:center;width:70%;">Task</th>
              <th style="text-align:center;">Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Preparation of Advertisement (By 01 day from the receipt of approved form)</td>

            </tr>
            <tr>

              <td>Publication of Advertisement (By 0 day)</td>

            </tr>
            <tr>
              <td>Application deadline (10 days)</td>

            </tr>
            <tr>
              <td>Short listing of profiles (By 2 days)</td>

            </tr>
            <tr>
              <td>Arrangement of PI (By 2 days)</td>

            </tr>
            <tr>
              <td>Arrangement of FI (By 2 days)</td>

            </tr>
            <tr>
              <td>Appointment Approval (By 2 days)</td>

            </tr>
            <tr>
              <td>Issuance of Appointment Letter (By 1 day)</td>

            </tr>
            <tr>
              <td>Total required time: </td>

            </tr>

          </tbody>
        </table>
      </div>
  </div>



  </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>