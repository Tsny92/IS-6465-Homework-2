
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Gift Card | AirAsia Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <main class="page-container">
        <header class="page-header">
            <h1>AirAsia Rewards System</h1>
            <h2>Update Gift Card</h2>
        </header>

        <section class="form-card">
            <form action="card-list.php" method="get">

                <div class="form-group">
                    <label for="cardName">Card Name</label>
                    <input type="text" id="cardName"
                           name="cardName"
                           value="Gift Card Option 1" required>
                </div>

                <div class="form-group">
                    <label for="cardType">Card Type</label>
                    <select id="cardType" name="cardType" required>
                        <option value="Retail" selected>Retail</option>
                        <option value="Physical">Physical</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cardValue">Card Value ($)</label>
                    <input type="number" id="cardValue"
                           name="cardValue"
                           min="0.01" step="0.01"
                           value="10.00" required>
                </div>

                <div class="form-group">
                    <label for="points">Points Required</label>
                    <input type="number" id="points"
                           name="points"
                           min="1" step="1"
                           value="10" required>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">
                        Update Gift Card
                    </button>

                    <a href="card-details.php" class="btn-link btn-secondary">
                        Cancel
                    </a>
                </div>

            </form>
        </section>
    </main>

</body>
</html>
