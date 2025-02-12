<?php
$projects = [
    ["title" => "Corporate IT Upgrade", "company" => "TechCorp Ltd.", "status" => "Open", "budget" => "$50,000"],
    ["title" => "Marketing Strategy Revamp", "company" => "BrandBoost Inc.", "status" => "In Progress", "budget" => "$20,000"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace - B-Sync</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h1>B-Sync Marketplace</h1>
        <a href="index.php">Home</a>
    </header>
    <section>
        <h2>Available Projects</h2>
        <table>
            <tr><th>Project</th><th>Company</th><th>Status</th><th>Budget</th></tr>
            <?php foreach ($projects as $project) { ?>
                <tr>
                    <td><?php echo $project["title"]; ?></td>
                    <td><?php echo $project["company"]; ?></td>
                    <td><?php echo $project["status"]; ?></td>
                    <td><?php echo $project["budget"]; ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>
</body>
</html>
