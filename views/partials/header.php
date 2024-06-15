<?php
// Define the path to the JSON file

// To Get the Current Filename. 
$currentPage= $_SERVER['SCRIPT_NAME']; 
  
// To Get the directory name in  
// which file is stored. 
$currentPage = substr($currentPage, 1); 

// echo $currentPage;

$jsonFilePathHeader = $currentPage == 'index.php' ? 'src\json\header.json' : '..\src\json\header.json';

// Check if the JSON file exists and is readable
if (!file_exists($jsonFilePathHeader) || !is_readable($jsonFilePathHeader)) {
    die(' Error: JSON file not found or not readable.');
}

// Read JSON file
$jsonHeader = file_get_contents($jsonFilePathHeader);

// Decode JSON data to PHP associative array
$dataHeader = json_decode($jsonHeader, true);

// Check if JSON data is valid
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error: Invalid JSON data. ' . json_last_error_msg());
}
?>

<div id="preloader" class="preloader">
    <svg class="ip" viewBox="0 0 256 128" width="256px" height="128px" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="grad1" x1="0" y1="0" x2="1" y2="0">
          <stop offset="0%" stop-color="#5ebd3e" />
          <stop offset="33%" stop-color="#ffb900" />
          <stop offset="67%" stop-color="#f78200" />
          <stop offset="100%" stop-color="#e23838" />
        </linearGradient>
        <linearGradient id="grad2" x1="1" y1="0" x2="0" y2="0">
          <stop offset="0%" stop-color="#e23838" />
          <stop offset="33%" stop-color="#973999" />
          <stop offset="67%" stop-color="#009cdf" />
          <stop offset="100%" stop-color="#5ebd3e" />
        </linearGradient>
      </defs>
      <g fill="none" stroke-linecap="round" stroke-width="16">
        <g class="ip__track" stroke="#ddd">
          <path d="M8,64s0-56,60-56,60,112,120,112,60-56,60-56"/>
          <path d="M248,64s0-56-60-56-60,112-120,112S8,64,8,64"/>
        </g>
        <g stroke-dasharray="180 656">
          <path class="ip__worm1" stroke="url(#grad1)" stroke-dashoffset="0" d="M8,64s0-56,60-56,60,112,120,112,60-56,60-56"/>
          <path class="ip__worm2" stroke="url(#grad2)" stroke-dashoffset="358" d="M248,64s0-56-60-56-60,112-120,112S8,64,8,64"/>
        </g>
      </g>
    </svg>
</div>

<header class="navigation">
  <a href="/" style = "text-decoration: none"><div class="logo">Polaris</div></a>
  
  <input type="checkbox" id="menu-bar">
  <label for="menu-bar">Menu</label>

  <nav class="nav-bar">
    <ul>
      <?php foreach($dataHeader['navbar-links'] as $item):?>
        <li class = <?php echo $item["class"] ?>>
          <a href=<?php echo $item["url"] ?> class = "<?php echo (($item["url"] == '../' . $currentPage) || (($currentPage == 'index.php') && ($item["url"] == '/'))) ? 'current' : ''; ?>"><?php echo $item["text"] ?></a>
        </li>
      <?php endforeach;?>
      <li>
        <a>Life &commat; IITBh &nbsp;<i class="fas fa-angle-down"></i></a>
        <ul>
          <?php foreach($dataHeader['dropdown-links'] as $item):?>
            <li class = <?php echo $item["class"] ?>>
              <!-- <a href=<?php echo $item["url"] ?>><?php echo $item["text"] ?></a> -->
              <a href=<?php echo $item["url"] ?> class = "<?php echo ($item["url"] == '../' . $currentPage)? 'current' : ''; ?>"><?php echo $item["text"] ?></a>
            </li>
          <?php endforeach;?>
        </ul>
      </li>
    </ul>
  </nav>
</header>