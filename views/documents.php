<?php
// Define the path to the JSON file
$jsonFilePath = '../src/json/documents.json';

// Check if the JSON file exists and is readable
if (!file_exists($jsonFilePath) || !is_readable($jsonFilePath)) {
    die('Error: JSON file not found or not readable.');
}

// Read JSON file
$json = file_get_contents($jsonFilePath);

// Decode JSON data to PHP associative array
$data = json_decode($json, true);

// Check if JSON data is valid
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error: Invalid JSON data. ' . json_last_error_msg());
}

if (isset($data['registration_form']['check'])) {
    // Replace URLs with "To Be Announced" if 'check' is 0
    if ($data['registration_form']['check'] == 0) {
        foreach ($data['registration_form']['lists'] as &$subList) {
            $subList['url'] = "To Be Announced"; // Changed from "To Be Uploaded" to "To Be Announced"
        }
    }
}


if (isset($data['loan']['check'])) {
    // Replace URLs with "To Be Announced" if 'check' is 0
    if ($data['loan']['check'] == 0) {
        foreach ($data['loan']['lists'] as &$subList) {
            $subList['url'] = "To Be Announced"; // Changed from "To Be Uploaded" to "To Be Announced"
        }
    }
}



// // Check if the required keys exist in the decoded data
// if (!isset($data['header'], $data['introduction'], $data['topics'], $data['gallery'])) {
//     die('Error: Missing required data in JSON.');
// }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#3498db">
        <meta property="og:image" content="https://polaris.iitbhilai.ac.in/img/2017_gymkhana.jpg" />

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Bitter:700|Dancing+Script:700" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <link rel="stylesheet" href="../public/css/animate.css">
        <link rel="stylesheet" href="../public/css/style.css">

        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <title>Polaris - Student Mentorship Program</title>


        <meta name="google-site-verification" content="psQtXO_U0R9o5w-fP7i3zrlm_g3nDtP0Mg6-Xg-q73w" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121551593-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-121551593-1');
		</script>

    </head>

    <body onload="closePreloader()">
    <div class ="bckproperty">
      <?php
      require_once('../views/partials/header.php');
      ?>

        <header class="header header__documents">
            <div class="container">
                <div class="header__hero-box">
                    <h1 class="heading-primary"><?php echo $data['header']['head']; ?></h1>
                    <p class="heading-subtitle"><?php echo $data['header']['text']; ?></p>
                </div>
            </div>
        </header>
      <section class="section section-documents">
          <div class="container">
              <div class="documents">
                  <h2 class="heading-secondary"><?php echo $data['header']['head']; ?><br><span><?php echo $data['registration_form']['head']; ?></span></h2>
                  <p class="documents__text"><?php echo $data['registration_form']['text']; ?></p>
                  <div class="bank">
                  <ul class="bank__list">
    <?php foreach ($data['registration_form']['lists'] as $subList): ?>
        <li class="bank__item"><i class="fas fa-download"></i>&nbsp; <?php echo $subList['text']; ?> 
            <a href="<?php echo $subList['url'] === 'To Be Announced' ? '#' : $subList['url']; ?>" download>
                <?php echo $subList['url'] === 'To Be Announced' ? 'To Be Announced' : 'Click Here!'; ?>
            </a>
        </li> <!-- Changed to conditionally display "To Be Announced" -->
    <?php endforeach; ?>  
</ul>

                  </div>
              </div>
          </div>
      </section>

      <div class="line-break"></div>

      <section class="section section-fee">
            <div class="container">
                <div class="documents">

                    <h2 class="heading-secondary"><span><?php echo $data['loan']['head']; ?></span></h2>
                    <p class="fee__text"><?php echo $data['loan']['text']; ?></p>
                    <div class="bank">
                    <ul class="bank__list">
    <!-- <?php foreach ($data['loan']['lists'] as $sub_List): ?>
        <li class="bank__item"><i class="fas fa-download"></i>&nbsp; <?php echo $sub_List['text']; ?> 
            <a href="<?php echo $sub_List['url'] === 'To Be Announced' ? '#' : $sub_List['url']; ?>" download>
                <?php echo $sub_List['url'] === 'To Be Announced' ? 'To Be Announced' : 'Click here.'; ?>
            </a>
        </li> Changed to conditionally display "To Be Announced"
    <?php endforeach; ?> -->
</ul>

                    </div>
                    
                </div>
            </div>
        </section>

        <div class="line-break"></div>

        <section class="section section-fee">
            <div class="container">
                <div class="fee">
                    <h2 class="heading-secondary"><span><?php echo $data['fee']['head']; ?></span></h2>
                    <p class="fee__text"> <?php echo $data["fee"]["lists"][0]["text"]; ?> <a href=<?php echo $data["fee"]["lists"][0]["url"]; ?> target="_blank">click here.</a></p>
                    <br>

                    <!-- <p class="fee__text">Generate the Fee Payment Challan through SBI Collect Payment Page. <a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" target="_blank">Click Here!</a><br>For procedure of payment through SBI Collect.<a href="Payment through SBI i collect.pdf" target="_blank"> Click Here!</a></p>
                    <p class="fee__text">No cash payment option will be available at the institute. As enquired for payment mode, following options are made available:</p>
                            <br/>
                            <ul class="sublist">
                                <li><strong>Option 1 &dash;</strong> By choosing SBI Collect Net banking facility option published in SBI Collect payment options page. </li>

                                <li><strong>Option 2 &dash;</strong> Offline mode to pay in SBI (any branch): <br/>
                                A student can choose SBI Branch option published in SBI Collect payment options page (at lower left corner) and can go to any SBI branch for paying the fee amount either in cash or otherwise acceptable by the bank.</li>
                            </ul>
                            <br/>
                    <p class="fee__text"><strong>Note:</strong> Direct fund transfer through NEFT/RTGS/Bank transfer mode is discouraged due to reconciliation issue and accordingly institute bank details are not shared.</p> -->
                </div>
            </div>
        </section>

        <!---->

        <?php
        require_once('../views/partials/footer.php');
        ?>
</div>
    </body>

</html>
