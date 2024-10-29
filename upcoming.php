<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FBF9F1;
            color: #333;
            padding: 20px;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            align-items: flex-start;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            max-width: 1600px;
            width: 100%;
            height: 100vh;
            overflow-y: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #92C7CF;
            text-align: center;
        }
        form {
            margin-bottom: 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
        }
        label {
            font-weight: bold;
        }
        select, button {
            padding: 5px 10px;
            font-size: 1em;
            margin-left: 5px;
        }
        .task-card {
            display: flex;
            align-items: center;
            background-color: #E5E1DA;
            border: 1px solid #AAD7D9;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
            gap: 20px;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
        }
        .task-details {
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        .task-card h2 {
            margin: 0;
            color: black;
            font-size: 1.2em;
            font-weight: bold;
        }
        .task-category, .task-priority, .task-deadline {
            margin: 0;
            color: #555;
            font-size: 0.9em;
        }
        .task-category {
            color: #92C7CF;
            font-weight: bold;
        }
        .filter-section {
            display: none;
        }
    </style>
    <script>
        function toggleFilterOptions() {
            const filterType = document.getElementById('filterType').value;
            const categoryFilter = document.getElementById('categoryFilter');
            const priorityFilter = document.getElementById('priorityFilter');

            categoryFilter.style.display = 'none';
            priorityFilter.style.display = 'none';

            if (filterType === 'category') {
                categoryFilter.style.display = 'block';
            } else if (filterType === 'priority') {
                priorityFilter.style.display = 'block';
            }
        }
    </script>
</head>
<body>
<?php include 'dashboard.php'?>
    <div class="container">
        <h1>Upcoming To-Do List</h1>

        <?php
        $tasks = [
            ["name" => "Finish report", "category" => "Work", "deadline" => "05-10-2024", "priority" => "High"],
            ["name" => "Grocery shopping", "category" => "Personal", "deadline" => "01-10-2024", "priority" => "Low"],
            ["name" => "Project meeting", "category" => "School", "deadline" => "05-11-2024", "priority" => "Medium"],
            ["name" => "Gym", "category" => "Personal", "deadline" => "20-10-2024", "priority" => "High"],
            ["name" => "Hospital appointment", "category" => "Personal", "deadline" => "25-10-2024", "priority" => "Medium"],
            ["name" => "Excel sheets", "category" => "Work", "deadline" => "30-10-2024", "priority" => "High"],
            ["name" => "Training", "category" => "Personal", "deadline" => "28-11-2024", "priority" => "Low"]
        ];

        $categories = array_unique(array_column($tasks, 'category'));
        sort($categories);

        $priorities = array_unique(array_column($tasks, 'priority'));
        sort($priorities);

        $filteredCategory = $_GET['category'] ?? 'All';
        $filteredPriority = $_GET['priority'] ?? 'All';

        if ($filteredCategory !== 'All') {
            $tasks = array_filter($tasks, function ($task) use ($filteredCategory) {
                return $task['category'] === $filteredCategory;
            });
        }

        if ($filteredPriority !== 'All') {
            $tasks = array_filter($tasks, function ($task) use ($filteredPriority) {
                return $task['priority'] === $filteredPriority;
            });
        }

        usort($tasks, function ($a, $b) {
            $dateA = DateTime::createFromFormat('d-m-Y', $a['deadline']);
            $dateB = DateTime::createFromFormat('d-m-Y', $b['deadline']);
            return $dateA <=> $dateB;
        });
        ?>

        <form method="GET">
            <label for="filterType">Filter by:</label>
            <select name="filterType" id="filterType" onchange="toggleFilterOptions()">
                <option value="">Select</option>
                <option value="category">Category</option>
                <option value="priority">Priority</option>
            </select>

            <div id="categoryFilter" class="filter-section">
                <label for="category">Select Category:</label>
                <select name="category" id="category">
                    <option value="All">All</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?php echo $category; ?>" <?php if ($filteredCategory === $category) echo 'selected'; ?>>
                            <?php echo $category; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div id="priorityFilter" class="filter-section">
                <label for="priority">Select Priority:</label>
                <select name="priority" id="priority">
                    <option value="All">All</option>
                    <?php foreach ($priorities as $priority): ?>
                        <option value="<?php echo $priority; ?>" <?php if ($filteredPriority === $priority) echo 'selected'; ?>>
                            <?php echo $priority; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit">Filter</button>
        </form>

        <?php
        if (!empty($tasks)) {
            foreach ($tasks as $task) {
                echo "<div class='task-card'>
                        <div class='checkbox-container'>
                            <input type='checkbox' name='task_completed' value='{$task['name']}'>
                        </div>
                        <div class='task-details'>
                            <h2>{$task['name']}</h2>
                            <p class='task-category'>Category: {$task['category']}</p>
                            <p class='task-priority'>Priority: {$task['priority']}</p>
                            <p class='task-deadline'>Deadline: {$task['deadline']}</p>
                        </div>
                      </div>";
            }
        } else {
            echo "<p>No tasks found for the selected filters.</p>";
        }
        ?>
    </div>
</body>
</html>
