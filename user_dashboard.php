<?php
 require_once("php/session.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DASHBOARD | NOUN</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
<header>
<?php include("php/layouts/admin_header.php"); ?>
</header>

<div class="container-fluid main-content">
    <div class="row">
        <aside>
        <?php include("php/layouts/aside.php"); ?>
        </aside>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-2 main">
            <div class="container">
                <div class="row read-text">
                    <div class="col-md-12 ">
                        <h2>The University for You</h2>
                        <p>The National Open University of Nigeria is an ODL institution renowned for providing functional, flexible, accessible, cost-effective education adequate for flourishing in the 21st century and beyond. Right from our first inception in July 1983, our mandate has remained to deliver university education at the doorstep of every interested Nigerian. The founding president, Alhaji Shehu Shagari, the first executive president of Nigeria, envisioned a university with the capacity to admit and meet the education and skill needs of citizens no matter their status and circumstances. This vision was predicated on the realization that a sustainable democracy, functional economy, happy and prosperous people, all depend on knowledgeable citizens. Meeting the educational needs of such citizens in a highly populous country like Nigeria was beyond the capacity of Nigeria's conventional higher institutions.</p>
                        <p>Despite its suspension in 1984 by the Federal Military Government that succeeded Alhaji Shehu Shagari, the resuscitation of NOUN in 2002 by the civilian regime of Chief Olusegun Obasanjo, went side by side with the awakening of the vision that informed the initial establishment of the university. As a faithful trustee of the Nigerian people, NOUN leverages on Information and Computer Technologies to deliver an education tailored towards the globalised economy. The University offers exceptional academic programmes that meet the specific needs of all sectors of the global economy, in the Arts; Health; Law; Physical, Social, Agricultural and Management Sciences.</p>
                    </div>
                    <div class="col-md-6">
                        <h2>NOUN Anthem</h2>
                        <p>National Open University of Nigeria Determined to be the foremost University in Nigeria Providing highly accessible and enhanced quality education Anchored by Social justice, equity, equality and national cohesion.</p>
                        <p>Come to NOUN For quality, cost effective and flexible learning That adds lifelong value, For all who yearn For quality education and for all Who seek knowledge.</p>
                    </div>
                    <div class="col-md-6">
                      <h2>Expectations for Clients</h2>
                      <p>Certain expectations are required of NOUN as it offers its services and products. These are: hitch free admission for all candidates into the appropriate programmes of the university according to individual qualification and/or professional standing and experience; attainment of delivery target of service delivery within one week of the respective target period; prompt response to enquiries from learners through the respective organs of the university such as the caB centre office, public affairs, e-mail and internet; and not the least, producing well-grounded graduates found fit in learning and character for self-realisation and the labour market.</p>
                  </div>
                    <div class="col-md-6">
                        <h2>Strategic Plan</h2>
                        <p>The concept and practice of Open and Distance Learning (ODL) in Nigeria has taken new dimensions within the last decade, especially with the resuscitation of the National Open University of Nigeria (NOUN). This calls for a strategic plan that entails a complete paradigm shift from the traditional mode of learning to a combination of face-to-face, learner-centred, technology-assisted, interactive, just-in-time learning, with no social bias or hindrances. The NOUN plan proposes to develop in five major areas. They are to:</p>
                        <ul>
                            <li>Enhance student enrolment in programmes being offered in the university</li>
                            <li>Create demand-driven academic programmes relevant to the needs of the economy</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>Implementation Strategy</h2>
                        <p>NOUN would seek collaboration with professional bodies/organisations to develop learning materials and produce instructionally well-designed course materials as study packs for students. Due to the special features of ODL, NOUN would have to ensure provision of learner support services through the use of study centres at various locations in the country; employ competent instructional facilitators to impart instructions at these study centres; and use student group learning activities, assignments, etc. to enhance learning as they encourage the development and use of appropriate multimedia technologies to achieve delivery of instructions. In conclusion, the implementation strategy involves a holistic approach towards achieving the university’s goals and objectives.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<footer class="fixed-bottom">
    <div class="container-fliud footer2 fixed-bottom">
      <div class="row text-center footer-text2 gx-0">
        <div>©2024 National open University of Nigeria</div>
      </div>

    </div>
  </footer>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
   