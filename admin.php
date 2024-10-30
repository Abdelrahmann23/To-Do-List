
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FBF9F1;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            color: #92C7CF;
            text-align: center;
            margin-bottom: 20px;
        }

        .dashboard-section {
            margin: 20px auto;
            padding: 20px;
            background-color: #E5E1DA;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            width: 95%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            table-layout: fixed;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #AAD7D9;
            color: #333;
            text-align: left;
        }

        td {
            background-color: #FBF9F1;
            color: #333;
        }

        table tr:nth-child(even) td {
            background-color: #E5E1DA;
        }

        button {
            padding: 10px 20px;
            background-color: #92C7CF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #AAD7D9;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #92C7CF;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            th, td {
                padding: 8px 10px;
            }

            .dashboard-section {
                width: 100%;
                padding: 10px;
            }

            button {
                width: 100%;
            }
        }
    </style>

<h1>Admin Dashboard</h1>

<div class="dashboard-section">
    <h2>Active Users</h2>
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Status</th>
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $activeUsers = [
                ['username' => 'MostafaMounib', 'email' => 'mostafamounib@gmail.com', 'status' => 'Active', 'last_login' => '2024-10-10'],
                ['username' => 'HabibaAmr', 'email' => 'habibaamr@gmail.com', 'status' => 'Inactive', 'last_login' => '2024-09-25'],
                ['username' => 'Jana', 'email' => 'Jana@gmail.com', 'status' => 'Inactive', 'last_login' => '2024-09-11']
            ];

            foreach ($activeUsers as $user) {
                echo "<tr>
                        <td>{$user['username']}</td>
                        <td>{$user['email']}</td>
                        <td>{$user['status']}</td>
                        <td>{$user['last_login']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<div class="dashboard-section">
    <h2>Task Completion Report</h2>
    <table>
        <thead>
            <tr>
                <th>Task</th>
                <th>Assigned To</th>
                <th>Status</th>
                <th>Completion Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $taskCompletion = [
                ['task' => 'Design Dashboard', 'assigned_to' => 'MostafaMounib', 'status' => 'Completed', 'completion_time' => '4 hours'],
                ['task' => 'Develop Login Feature', 'assigned_to' => 'HabibaAmr', 'status' => 'In Progress', 'completion_time' => 'N/A'],
                ['task' => 'Assignment 2', 'assigned_to' => 'Jana', 'status' => 'In Progress', 'completion_time' => 'N/A']
            ];

            $totalTasks = count($taskCompletion);
            $completedTasks = 0;
            $totalTime = 0;
            $completedTaskCount = 0;

            foreach ($taskCompletion as $task) {
                if ($task['status'] === 'Completed') {
                    $completedTasks++;
                    $time = intval($task['completion_time']);
                    $totalTime += $time;
                    $completedTaskCount++;
                }
                echo "<tr>
                        <td>{$task['task']}</td>
                        <td>{$task['assigned_to']}</td>
                        <td>{$task['status']}</td>
                        <td>{$task['completion_time']}</td>
                    </tr>";
            }

            $completionRate = ($completedTasks / $totalTasks) * 100;
            $averageTime = $completedTaskCount ? $totalTime / $completedTaskCount : 0;
            ?>
        </tbody>
    </table>

    <p><strong>Task Completion Rate:</strong> <?php echo number_format($completionRate, 2); ?>%</p>
    <p><strong>Average Completion Time:</strong> <?php echo number_format($averageTime, 2); ?> hours</p>
</div>

<div class="dashboard-section">
    <h2>App Usage</h2>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Login Time</th>
                <th>Logout Time</th>
                <th>Time Spent</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $appUsage = [
                ['user' => 'MostafaMounib', 'login_time' => '2024-10-10 09:00', 'logout_time' => '2024-10-10 11:00', 'time_spent' => '2 hours'],
                ['user' => 'HabibaAmr', 'login_time' => '2024-09-25 14:30', 'logout_time' => '2024-09-25 15:00', 'time_spent' => '30 mins'],
                ['user' => 'Jana', 'login_time' => '2024-09-25 14:30', 'logout_time' => '2024-09-25 18:30', 'time_spent' => '4 hours']
            ];

            foreach ($appUsage as $usage) {
                echo "<tr>
                        <td>{$usage['user']}</td>
                        <td>{$usage['login_time']}</td>
                        <td>{$usage['logout_time']}</td>
                        <td>{$usage['time_spent']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<div class="dashboard-section">
    <h2>Feedback Report</h2>
    <table>
        <thead>
            <tr>
                <th>Feedback Type</th>
                <th>Percentage</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $feedback = [
                ['type' => 'Satisfying', 'count' => 70],
                ['type' => 'Neutral', 'count' => 20],
                ['type' => 'Unhappy', 'count' => 10],
            ];

            $totalFeedback = array_sum(array_column($feedback, 'count'));

            foreach ($feedback as $item) {
                $percentage = ($item['count'] / $totalFeedback) * 100;
                echo "<tr>
                        <td>{$item['type']}</td>
                        <td>" . number_format($percentage, 2) . "%</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Sign Out Button -->
<div class="dashboard-section">
    <form action="login.php" method="get">
        <button type="submit">Sign Out</button>
    </form>
</div>


</body>
</html>