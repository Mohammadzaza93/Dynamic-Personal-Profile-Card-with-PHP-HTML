<?php 
// Include the variables file that contains all profile data
include 'variables.php'; 
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Basic meta tags for character set and compatibility -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    
    <!-- Page title that appears in browser tab -->
    <title>Profile Card</title>
    
    <!-- Viewport settings for responsive design -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <!-- Link to external CSS stylesheet -->
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <!-- Main profile card container -->
    <card>
        <!-- Date display section - only shows if $showDate is true -->
        <?php if ($showDate): ?>
            <div class="date-display">
                <!-- Output current date in specified format -->
                <?php echo date($dateFormat); ?>
            </div>
        <?php endif; ?>
        
        <!-- Avatar image container -->
        <div class="avatar-container">
            <!-- Check if avatar image exists at specified path -->
            <?php if (file_exists($avatarPath)): ?>
                <!-- Display avatar image -->
                <img src="<?= $avatarPath ?>" alt="<?= $FullName ?>'s Avatar" class="avatar">
            <?php else: ?>
                <!-- Fallback if avatar image doesn't exist -->
                <div class="avatar-placeholder">No Avatar</div>
            <?php endif; ?>
        </div>

        <!-- Profile name (main heading) -->
        <h1><?php echo $FullName ?></h1>
        
        <!-- Age information with data type -->
        <h3>Age: 
            <span class="info-value"><?= $Age ?></span> 
            <span class="info-type">// <?= gettype($Age) ?></span>
        </h3>
        
        <!-- Job title information with data type -->
        <h3>Job Title: 
            <span class="info-value"><?= $JobTitle ?></span> 
            <span class="info-type">// <?= gettype($JobTitle) ?></span>
        </h3>
        
        <!-- City information with data type -->
        <h3>City: 
            <span class="info-value"><?= $City ?></span> 
            <span class="info-type">// <?= gettype($City) ?></span>
        </h3>
        
        <!-- Experience information with data type -->
        <h3>Years of Experience: 
            <span class="info-value"><?= $YearsOfExperience ?></span> 
            <span class="info-type">// <?= gettype($YearsOfExperience) ?></span>
        </h3>
        
        <!-- Driver license information (converted to Yes/No) with data type -->
        <h3>Driver License: 
            <span class="info-value"><?= $HasDrivingLicense ? 'Yes' : 'No' ?></span> 
            <span class="info-type">// <?= gettype($HasDrivingLicense) ?></span>
        </h3>
        
        <!-- Skills section heading -->
        <h2>Skills:</h2>
        
        <!-- Skills list container -->
        <div class="skills">
            <!-- Loop through each skill in the $skills array -->
            <?php foreach ($skills as $skill): ?>
                <!-- Display each skill in a separate div -->
                <div><?= $skill ?></div>
            <?php endforeach; ?>
        </div>
    </card>
</body>
</html>