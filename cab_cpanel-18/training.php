<?php
include "./webmaster/initialization.php";
$sql2="SELECT * FROM `mock_test`ORDER BY `Id` DESC"  ;
$mk_rows=mysqli_query($con,$sql2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Title--->
        <title>LIC</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/css/mdb.min.css" rel="stylesheet">
        <!---Custom css--->
        <link rel="stylesheet" href="styles.css">
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    
    <script src="jquery.dreamalert.js"></script>
<link href="jquery.dreamalert.css"rel="stylesheet">        <script src="lic.js"></script>
 <style type="text/css">
        body p
{
  text-align: justify;
}
    </style>
    </head>
    <body>
  <?php include_once('include/header.php')?>
   <?php include_once('include/social.php')?>
        <section style="margin-top: 0%!important;">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/mock%20test_05.jpg" height="400"
                        alt="First slide">
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/mock%20test_07.jpg" height="400"
                        alt="Second slide">
                    </div>
                    <!--/Second slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
        </section>
        <section class="py-5">
            <div class="container">
                <h2 class="text-center font-weight-bold mb-5" style="color: #1D4E9E;"><u>LIC Agent Mock Test</u></h2>
                <p>A mock test is a practice test that is conducted for the applicants for a better result in their final exam. A mock test is a sample of the actual examination and helps in building the confidence of the applicant. Mock Testsare model tests of the actual exam that follows the exam pattern and is bound by the time. Mocks are very helpful in knowing where you should improvise and where your strengths lie, they help in performing better and give you results on time consumption per question.It shows number of wrong and right answers, attempted questions, Negative scores and time Consumed.</p>
                <h2 class="py-3"><b>How To Prepare For IC38 Exam ?</b></h2>
                <ul>
                    <li>DAY 1. Read all the chapters from the IC38 Study Material . It will take 2hrs to read all the chapters</li>
                    <li>DAY 2/3. Go through the question set given in IC38 Study Material for different languages . Try to solve questions on your own before looking to answers.</li>
                    <li>DAY 4/5. Attempt the Mock Test in your preferred languages.</li>
                    <li>DAY 6. Once again revise all the chapters given in the notes. Make sure you are aware of all the important topics of each chapter.</li>
                    <li>DAY 7. Exam day.</li>
                </ul>
                <h2><b>Tips For How To Solve The Paper?</b></h2>
                <ul>
                    <li>There will be 50 questions in total. First go through all the questions. We have to score 18 questions to pass.</li>
                    <li>Now solve those questions which you are 100% sure. That is you know the answers of such questions very well. Questions which you have read or questions you have solved before also in practice test. It will take hardly 10 minutes to solve this questions.
                        <br>
                    Note –There will be 12-15 such questions which you can solve confidently. Now we have to work for 3-6 questions only.</li>
                    <li>Now you are left with questions which you are doubtful and which you don’t know anything.
                        <br>
                    Note –There will be 30-35 such questions in such category.</li>
                    <li>First try to solve those questions which you are doubtful. In doubtful questions there will be 2 options which have no connection with question leave such options and try to figure out correct answer from remaining 2 options. Don’t waste much time on such questions. Maximum 10-15 minutes only for doubtful questions.
                        <br>
                    Note –There will be 10-15 such questions in this category. After using above trick you can easily score 3-4 questions correct.</li>
                    <li>Now you will be left with only those questions which you don’t know or have no idea about it. Don’t think much about it simply mark option C to all such question. It will take hardly 5 minutes to do it.
                        <br>
                    Note –There will be 15-20 such questions in such category. After using above trick you can easily score another 3-4 questions correct. Your complete paper will finish in 35-40 minutes. Make use of remaining time for checking.</li>
                    <li>In last 10 minutes of the exam asterisk all questions and make sure you have attempted all questions.</li>
                </ul>
                <div>
                    <h2 ><b>Download Materials For Preparation</b></h2>
                    <p class="mt-3">Exams Materials can be download here :</p>
                    <div class="container">
                        <div class="row modelpaper">
                            <?php
                            while($mk_row=mysqli_fetch_array($mk_rows))
                            {
                            ?>
                            <div class="col-md-3" id="training1" style="border-style: ridge;">
                                <h5><?php echo $mk_row['Title']; ?></h5>
                                <a><i class="fas fa-file-pdf fa-5x text-danger ml-2 my-3"></i></a>
                                <br>
                                <a class="btn btn-light-blue btn-md" download href="<?php echo "webmaster/".$mk_row['File_Path']; ?>">Download</a>
                            </div>
                            <?php } ?>
                            <hr><hr>
                        </div>
                    </div>
                </div>
              <!--  -->
              <h6 class="text-center">Register To get the Answer Sheet & Live Mock test link </h6>
              <h3 class="text-center mt-5">Follow the Link to access Exam related materials and try Mock Tests. <a href="https://www.workwithlic.com/ ">https://www.workwithlic.com/ </a> <a href=""data-toggle="modal" data-target="#modalLoginForm"> <!-- Register --></a>  Call us for Password.</h3>
            </div>
        </section>
        <div class="container">
             <h2 class="text-center font-weight-bold mb-5" style="color: #1D4E9E;"><u>LIC Assistant Mock Test</u></h2>
            
            <p>LIC released the recruitment notification for the post of LIC Assistant which was much awaited by most of the job aspirants. LIC Assistant 2019 Exam will be conducted in two phases: Prelims & Mains. LIC Assistant Prelims is a few days away now and thus all you need is now to practice LIC Assistant mock test. ixamBee’s LIC Assistant free mock test has been prepared by our experts after a detailed analysis of previous year exam patterns to give you a real exam like feel. Practice LIC Assistant mock test to analyze your speed and accuracy. LIC Assistant test series are the one-stop solution for your LIC Assistant exam preparation.</p>
    
         <h3 class=" font-weight-bold mb-5" >LIC Assistant Online Test Series</h3>
         <p>All the candidates who have applied for LIC Assistant 2019 Exam should be gearing up for LIC Assistant Prelims Exam. As this is the first step of the selection and examination process, you need to be extra careful with the LIC Assistant Prelims exam preparation. Practice ixamBee’s online test series for LIC Assistant Prelims 2019 and ensure a good performance on the final day. By practicing the online mock test series for LIC Assistant 2019 Exam, you can attempt the examination with complete confidence. ixamBee’s free online test series will help you boosting your score along with your confidence. It will also enhance your exam preparation.</p>
         <h3 ><b>LIC Assistant Prelims Exam Pattern</b></h3>
         <table class="table table-striped">
             <tr>
                 <th>S.No</th>
                 <th>   Sections</th>
                 <th>No. of Questions</th>
                 <th>   Total Marks</th>
                 <th>Duration</th>
             </tr>
             <tr>
                 <td>1.</td>
                 <td>Reasoning Ability</td>
                 <td>35</td>
                 <td>35</td>
                 <td>   20 minutes</td>
             </tr>
              <tr>
                 <td>2.</td>
                 <td>Numerical Ability</td>
                 <td>35</td>
                 <td>35</td>
                 <td>   20 minutes</td>
             </tr>
              <tr>
                 <td>3.</td>
                 <td>English Language / Hindi Language</td>
                 <td>30</td>
                 <td>30</td>
                 <td>   20 minutes</td>
             </tr>
              <tr>
                 <td></td>
                 <td>Total</td>
                 <td>100</td>
                 <td>100</td>
                 <td>   60 minutes</td>
             </tr>
         </table>
    <h3 ><b> LIC Assistant Mains Exam Pattern</b></h3>
              <table class="table table-striped">
             <tr>
                 <th>S.No</th>
                 <th>   Sections</th>
                 <th>No. of Questions</th>
                 <th>   Total Marks</th>
                 <th>Duration</th>
             </tr>
             <tr>
                 <td>1.</td>
                 <td>Reasoning Ability & Computer Aptitude</td>
                 <td>40</td>
                 <td>40</td>
                 <td>   30 minutes</td>
             </tr>
              <tr>
                 <td>2.</td>
                 <td>General/ Financial Awareness</td>
                 <td>40</td>
                 <td>40</td>
                 <td>   30 minutes</td>
             </tr>
              <tr>
                 <td>3.</td>
                 <td>Quantitative Aptitude</td>
                 <td>40</td>
                 <td>40</td>
                 <td>   30 minutes</td>
             </tr>
               <tr>
                 <td>4.</td>
                 <td>English Language</td>
                 <td>40</td>
                 <td>40</td>
                 <td>   30 minutes</td>
             </tr>
               <tr>
                 <td>5.</td>
                 <td> Hindi Language</td>
                 <td>40</td>
                 <td>40</td>
                 <td>   30 minutes</td>
             </tr>
              <tr>
                 <td></td>
                 <td>Total</td>
                 <td>200</td>
                 <td>200</td>
                 <td>   160 minutes</td>
             </tr>
         </table> 
<h2 class="text-center font-weight-bold mb-5" style="color: #1D4E9E;"><u> LIC Assistant Official Language Qualifying test</u></h2>
        <li>An official language test will be conducted for the candidates applying for LIC Assistant Exam 2019. The language test for each candidate will be decided according to the choice of the Stae/UT the candidate has applied for. The test will be of 25 marks. General category candidate will have to score minimum 10 marks & SC/ST/PwD candidates will have to score at least 9 marks.</li>
        <li>hese marks scored by a candidate will only be qualifying in nature & will not be considered while finalising the merit list.</li>
<li>The candidates who qualify Main examination and possess 10th/12th standard certificate/marksheet proving he/she has studied the official language of the respective Stae/UT will not be required to appear for this test.</li>
<li>The candidates who apply for those divisions which are under the State/UTs which have English/Hindi as their official language, will also not be required to appear for any such language test.</li>
    </div>
    <?php include_once('include/demofooter.php')?>
 
      
        
        <!-- JQuery -->
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.0/js/mdb.min.js"></script>
    </body>
</html>