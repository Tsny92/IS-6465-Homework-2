
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gift Card | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <main class="page-container">
        <header class="page-header">
            <h1>AirAsia Rewards System</h1>
            <h2>Add Gift Card</h2>
        </header>

        <section class="form-card">
            <form action="card-list.php" method="get">

                <div class="form-group">
                    <label for="cardName">Card Name</label>
                    <input type="text" id="cardName"
                           name="cardName"
                           placeholder="Enter gift card name" required>
                </div>

                <div class="form-group">
                    <label for="cardType">Card Type</label>
                    <select id="cardType" name="cardType" required>
                        <option value="">Select card type</option>
                        <option value="Digital">Digital</option>
                        <option value="Physical">Physical</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cardValue">Card Value ($)</label>
                    <input type="number" id="cardValue"
                           name="cardValue"
                           min="0.01" step="0.01"
                           placeholder="Enter card value" required>
                </div>

                <div class="form-group">
                    <label for="points">Points Required</label>
                    <input type="number" id="points"
                           name="points"
                           min="1" step="1"
                           placeholder="Enter points required" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">
                        Save Gift Card
                    </button>

                    <a href="card-list.php" class="btn-link btn-secondary">
                        Cancel
                    </a>
                </div>

            </form>
        </section>
    </main>

</body>
</html>
